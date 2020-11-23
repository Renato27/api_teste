<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ContratoPedidoRepository
{
    /**
     * Retorna ContratoPedido baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContratoPedido(int $pedido): ?Model;

    /**
     * Retorna uma coleção de ContratoPedido baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContratoPedidos(int $contrato): ?Collection;
    
    /**
     * Cria um novo ContratoPedido
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContratoPedido(array $detalhes): ?Model;

    /**
     * Atualiza um ContratoPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContratoPedido(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ContratoPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContratoPedido(int $id): bool;
}