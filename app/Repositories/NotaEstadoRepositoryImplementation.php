<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\NotaEstadoRepository;

class NotaEstadoRepositoryImplementation implements NotaEstadoRepository
{
    /**
     * Retorna NotaEstado baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getNotaEstado(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de NotaEstado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getNotaEstados(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo NotaEstado.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createNotaEstado(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um NotaEstado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateNotaEstado(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um NotaEstado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteNotaEstado(int $id): bool
    {
    }
}
