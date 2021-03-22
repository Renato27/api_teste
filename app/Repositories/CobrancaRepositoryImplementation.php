<?php

namespace App\Repositories;

use App\Repositories\Contracts\CobrancaRepository;
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

    }

    /**
     * Retorna uma coleção de Cobranca baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getCobrancas(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo Cobranca
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createCobranca(array $detalhes): ?Model
    {

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

    }

    public function getCobrancaMonitoramento() : ?Collection
    {

    }
}
