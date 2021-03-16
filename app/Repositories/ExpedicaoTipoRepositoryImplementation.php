<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ExpedicaoTipoRepository;

class ExpedicaoTipoRepositoryImplementation implements ExpedicaoTipoRepository
{
    /**
     * Retorna ExpedicaoTipo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getExpedicaoTipo(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de ExpedicaoTipo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getExpedicaoTipos(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo ExpedicaoTipo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createExpedicaoTipo(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um ExpedicaoTipo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateExpedicaoTipo(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um ExpedicaoTipo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteExpedicaoTipo(int $id): bool
    {
    }
}
