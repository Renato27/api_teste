<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface PedidoRepository
{
    /**
     * Retorna Pedido baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPedido(int $id): ?Model;

    /**
     * Retorna uma coleção de Pedido baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPedidos(): ?Collection;
    
    /**
     * Cria um novo Pedido
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createPedido(array $detalhes): ?Model;

    /**
     * Atualiza um Pedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updatePedido(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Pedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deletePedido(int $id): bool;
}