<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface PedidoStatusPedidoRepository
{
    /**
     * Retorna PedidoStatusPedido baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPedidoStatusPedido(int $pedido): ?Model;

    /**
     * Retorna uma coleção de PedidoStatusPedido baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPedidoStatusPedidos(int $status): ?Collection;
    
    /**
     * Cria um novo PedidoStatusPedido
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createPedidoStatusPedido(array $detalhes): ?Model;

    /**
     * Atualiza um PedidoStatusPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updatePedidoStatusPedido(int $id, array $detalhes): ?Model;

    /**
     * Deleta um PedidoStatusPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deletePedidoStatusPedido(int $id): bool;
}