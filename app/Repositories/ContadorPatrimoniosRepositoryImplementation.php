<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ContadorPatrimoniosRepository;

class ContadorPatrimoniosRepositoryImplementation implements ContadorPatrimoniosRepository
{
    /**
     * Retorna ContadorPatrimonios baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContadorPatrimonios(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de ContadorPatrimonios baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContadorPatrimonioss(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo ContadorPatrimonios.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContadorPatrimonios(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um ContadorPatrimonios.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContadorPatrimonios(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um ContadorPatrimonios.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContadorPatrimonios(int $id): bool
    {
    }
}
