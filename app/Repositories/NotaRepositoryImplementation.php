<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use App\Models\ClienteContato\ClienteContato;
use App\Models\ClienteEndereco\ClienteEndereco;
use App\Models\Nota\Nota;
use Carbon\CarbonImmutable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\NotaRepository;

class NotaRepositoryImplementation implements NotaRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Nota baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getNota(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Notas.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getNotas(): ?Collection
    {
        return Nota::with(['cliente:id,nome_fantasia', 'nota_estado:id,nome', 'contrato:id,nome'])
            ->select('id', 'data_emissao', 'data_vencimento', 'data_pagamento', 'periodo_inicio', 'periodo_fim','valor',
                'nota_estado_id', 'cliente_id', 'contrato_id')->get();
    }

    /**
     * Cria um novo Nota.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createNota(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Nota.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateNota(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Nota.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteNota(int $id): bool
    {
        $retorno = $this->delete($id);

        if ($retorno) {
            return false;
        }

        return true;
    }

    private function getSomaNotasPagasMes() : ?Collection
    {
        return $this->where(['nota_estado_id' => 3])
        ->whereBetween('data_vencimento', [CarbonImmutable::today()->firstOfMonth()->format('Y-m-d'), CarbonImmutable::today()->endOfMonth()->format('Y-m-d')])
        ->select(DB::raw('sum(valor) as valor'))
        ->get();
    }

    private function getSomaNotasVencidasMes() : ?Collection
    {
        return $this->where(['nota_estado_id' => 2])
        ->whereBetween('data_vencimento', [CarbonImmutable::today()->firstOfMonth()->format('Y-m-d'), CarbonImmutable::today()->endOfMonth()->format('Y-m-d')])
        ->select(DB::raw('sum(valor) as valor'))
        ->get();
    }

    private function getSomaNotasAvencerMes() : ?Collection
    {
        return $this->where(['nota_estado_id' => 1])
        ->whereBetween('data_vencimento', [CarbonImmutable::today()->firstOfMonth()->format('Y-m-d'), CarbonImmutable::today()->endOfMonth()->format('Y-m-d')])
        ->select(DB::raw('sum(valor) as valor'))
        ->get();
    }

    /**
     * Retorna os dados para gerar um gráfico de monitoramento das notas do mês.
     *
     * @return array|null
     */
    public function getNotasGrafico(): ?array
    {
        return [
            'Pagas' => $this->getSomaNotasPagasMes(),
            'Vencidas' => $this->getSomaNotasVencidasMes(),
            'A_Vencer' => $this->getSomaNotasAvencerMes(),
        ];
    }

     /**
	 * Retorna os clientes com notas vencidas a mais de 10 dias
	 *
	 * @param integer|null $cliente
	 * @return Collection|null
	 */
	public function getClientesNotaVencidaAMais10dias(?int $cliente = null) : ?Collection
	{
        if(is_null($cliente)){
            return Nota::whereHas('cliente', function($query){
                $query->whereDoesntHave('processo');
            })
            ->whereDate('data_vencimento', '<=', CarbonImmutable::today()->subDays(10)->format('Y-m-d'))
            ->doesntHave('serasa')
            ->where('nota_estado_id', 2)
            ->with('cliente:id,nome_fantasia')
            ->select('id','data_vencimento', 'cliente_id')->get();
        }

        return Nota::whereHas('cliente', function($query){
            $query->whereDoesntHave('processo');
        })
        ->whereDate('data_vencimento', '<=', CarbonImmutable::today()->subDays(10)->format('Y-m-d'))
        ->doesntHave('serasa')
        ->where(['nota_estado_id' => 2, 'cliente_id' => $cliente])
        ->with('cliente:id,nome_fantasia')
        ->select('id','data_vencimento', 'cliente_id')->get();
	}

    /**
     * Undocumented function
     *
     * @return Collection|null
     */
    public function notasVencidas7Dias() : ?Collection
    {
        $hoje = CarbonImmutable::today()->format('Y-m-d');
        $menos_7_dias = CarbonImmutable::today()->subDays(7)->format('Y-m-d');

        return Nota::where('nota_estado_id', 2)
            ->whereBetween('data_vencimento', [$menos_7_dias, $hoje])
            ->with('cliente:id,nome_fantasia')
            ->select('id', 'cliente_id', 'valor', 'data_vencimento')
            ->get();
    }

    /**
     * Retorna Endereco e contato (telefone e celular) para o nota show.
     *
     * @param Nota $nota
     * @return Collection|null
     */
    public function showNota(Nota $nota) : ?Collection
    {
        $array = collect();

        $array->add($nota);
        $array->add($this->notaEndereco($nota->cliente_id));
        $array->add($this->notaTelefoneOuCelular($nota->cliente_id));
        return $array;
    }

    /**
     * Undocumented function
     *
     * @param integer $cliente
     * @return Collection|null
     */
    public function notaEndereco(int $cliente) : ?Collection
    {
        $endereco = ClienteEndereco::where('cliente_id', $cliente)
        ->whereHas('endereco', function($query) {
            $query->where('principal', 1);
        })->with('endereco:id,rua,numero,bairro,cep,cidade,estado')->get();


        return $endereco;
    }

    /**
     * Undocumented function
     *
     * @param integer $cliente
     * @return model|null
     */
    public function notaTelefoneOuCelular(int $cliente) : ?model
    {
        $contato = ClienteContato::where('cliente_id', $cliente)
        ->whereHas('contato', function($query2) {
            $query2->where('principal', 1);
        })->with('contato:id,telefone,celular')->first();

        if(is_null($contato)){
            $contato = ClienteContato::where('cliente_id', $cliente)
            ->whereHas('contato', function($query2) {
                $query2->whereNotNull('telefone');
            })->with('contato:id,telefone,celular')->first();
        }

        if(is_null($contato)){
            return null;
        }
        return $contato;

    }
}
