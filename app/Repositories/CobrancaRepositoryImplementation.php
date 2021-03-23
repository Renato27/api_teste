<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Carbon\CarbonImmutable;
use App\Models\Cobranca\Cobranca;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\CobrancaRepository;

class CobrancaRepositoryImplementation implements CobrancaRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Cobranca baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getCobranca(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Cobranca baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getCobrancasByCliente(int $cliente): ?Collection
    {
        return $this->where(['cliente_id' => $cliente])->get();
    }

    /**
     * Retorna uma coleção de Cobranca baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getCobrancasByUsuario(int $usuario): ?Collection
    {
        return $this->where(['usuario_id' => $usuario])->get();
    }

    /**
     * Cria um novo Cobranca.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createCobranca(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Cobranca.
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
     * Deleta um Cobranca.
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
            ->with('notas', function ($query) {
                $query->select('nota_id');
            })
            ->withCount('atividades')
            ->withCount(['atividades', 'atividades as atividades_hoje' => function ($query2) {
                $query2->whereDate('created_at', CarbonImmutable::today()->format('Y-m-d'));
            }])
            ->where('cobranca_estado_id', 1)
            ->get();
    }
}
