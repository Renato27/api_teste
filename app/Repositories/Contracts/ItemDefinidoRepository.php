<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ItemDefinidoRepository
{
    /**
     * Retorna ItemDefinido baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getItemDefinido(int $id): ?Model;

    /**
     * Retorna uma coleção de ItemDefinido baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getItemDefinidosByTipo(int $tipo): ?Collection;

    /**
     * Cria um novo ItemDefinido.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createItemDefinido(array $detalhes): ?Model;

    /**
     * Atualiza um ItemDefinido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateItemDefinido(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ItemDefinido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteItemDefinido(int $id): bool;
}
