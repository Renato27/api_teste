<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\CobrancaEstadoRepository;

class CobrancaEstadoRepositoryImplementation implements CobrancaEstadoRepository
{
    /**
     * Retorna CobrancaEstado baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getCobrancaEstado(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de CobrancaEstado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getCobrancaEstados(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo CobrancaEstado.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createCobrancaEstado(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um CobrancaEstado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateCobrancaEstado(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um CobrancaEstado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteCobrancaEstado(int $id): bool
    {
    }
}
