<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface RetiradaRepository
{
    /**
     * Retorna Retirada baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getRetirada(int $id): ?Model;

    /**
     * Retorna uma coleção de Retirada baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getRetiradas(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo Retirada.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createRetirada(array $detalhes): ?Model;

    /**
     * Atualiza um Retirada.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateRetirada(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Retirada.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteRetirada(int $id): bool;
}
