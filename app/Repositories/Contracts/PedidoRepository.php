<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface PedidoRepository
{
    /**
     * Retorna Pedido baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getPedido(int $id): ?Model;

    /**
     * Retorna uma coleção de Pedido baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPedidos(): ?Collection;

    /**
     * Cria um novo Pedido.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPedido(array $detalhes): ?Model;

    /**
     * Atualiza um Pedido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePedido(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Pedido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePedido(int $id): bool;
}
