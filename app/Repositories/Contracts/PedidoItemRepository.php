<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface PedidoItemRepository
{
    /**
     * Retorna PedidoItem baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getPedidoItem(int $item): ?Model;

    /**
     * Retorna uma coleção de PedidoItem baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPedidoItems(int $pedido): ?Collection;

    /**
     * Cria um novo PedidoItem.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPedidoItem(array $detalhes): ?Model;

    /**
     * Atualiza um PedidoItem.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePedidoItem(int $id, array $detalhes): ?Model;

    /**
     * Deleta um PedidoItem.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePedidoItem(int $id): bool;
}
