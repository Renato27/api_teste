<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ItemPedidoRepository
{
    /**
     * Retorna ItemPedido baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getItemPedido(int $id): ?Model;

    /**
     * Retorna uma coleção de ItemPedido baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getItemPedidos(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo ItemPedido
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createItemPedido(array $detalhes): ?Model;

    /**
     * Atualiza um ItemPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateItemPedido(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ItemPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteItemPedido(int $id): bool;
}