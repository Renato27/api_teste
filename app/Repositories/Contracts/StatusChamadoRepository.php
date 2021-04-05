<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface StatusChamadoRepository
{
    /**
     * Retorna StatusChamado baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getStatusChamado(int $id): ?Model;

    /**
     * Retorna uma coleção de StatusChamado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getStatusChamados(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo StatusChamado.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createStatusChamado(array $detalhes): ?Model;

    /**
     * Atualiza um StatusChamado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateStatusChamado(int $id, array $detalhes): ?Model;

    /**
     * Deleta um StatusChamado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteStatusChamado(int $id): bool;
}
