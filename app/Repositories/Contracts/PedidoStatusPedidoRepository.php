<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface PedidoStatusPedidoRepository
{
    /**
     * Retorna PedidoStatusPedido baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getPedidoStatusPedido(int $pedido): ?Model;

    /**
     * Retorna uma coleção de PedidoStatusPedido baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPedidoStatusPedidos(int $status): ?Collection;

    /**
     * Cria um novo PedidoStatusPedido.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPedidoStatusPedido(array $detalhes): ?Model;

    /**
     * Atualiza um PedidoStatusPedido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePedidoStatusPedido(int $id, array $detalhes): ?Model;

    /**
     * Deleta um PedidoStatusPedido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePedidoStatusPedido(int $id): bool;
}
