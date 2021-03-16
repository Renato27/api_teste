<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ExpedicaoEstadoRepository;

class ExpedicaoEstadoRepositoryImplementation implements ExpedicaoEstadoRepository
{
    /**
     * Retorna ExpedicaoEstado baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getExpedicaoEstado(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de ExpedicaoEstado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getExpedicaoEstados(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo ExpedicaoEstado.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createExpedicaoEstado(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um ExpedicaoEstado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateExpedicaoEstado(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um ExpedicaoEstado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteExpedicaoEstado(int $id): bool
    {
    }
}
