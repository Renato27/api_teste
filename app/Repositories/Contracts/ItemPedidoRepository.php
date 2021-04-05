<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ItemPedidoRepository
{
    /**
     * Retorna ItemPedido baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getItemPedido(int $id): ?Model;

    /**
     * Retorna uma coleção de ItemPedido baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getItemPedidos(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo ItemPedido.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createItemPedido(array $detalhes): ?Model;

    /**
     * Atualiza um ItemPedido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateItemPedido(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ItemPedido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteItemPedido(int $id): bool;
}
