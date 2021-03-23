<?php

namespace App\Repositories;

use App\Models\Cobranca\Cobranca;
use App\Repositories\Contracts\CobrancaRepository;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CobrancaRepositoryImplementation implements CobrancaRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Cobranca baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getCobranca(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Cobranca baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getCobrancasByCliente(int $cliente): ?Collection
    {
        return $this->where(['cliente_id' => $cliente])->get();
    }

    /**
     * Retorna uma coleção de Cobranca baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getCobrancasByUsuario(int $usuario): ?Collection
    {
        return $this->where(['usuario_id' => $usuario])->get();
    }

    /**
     * Cria um novo Cobranca
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createCobranca(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Cobranca
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateCobranca(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Cobranca
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteCobranca(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }

    /**
     * Retorna as cobrancas para a dashboard de gestão.
     *
     * @return Collection|null
     */
    public function getCobrancaMonitoramento() : ?Collection
    {
        return Cobranca::whereHas('atividades')
            ->whereHas('notas')
            ->with('cliente:id,nome_fantasia')
            ->with('notas', function($query){
                $query->select('nota_id');
            })
            ->withCount('atividades')
            ->withCount(['atividades', 'atividades as atividades_hoje' => function($query2){
                $query2->whereDate('created_at', CarbonImmutable::today()->format('Y-m-d'));
            }])
            ->where('cobranca_estado_id', 1)
            ->get();
    }
}
