<?php

namespace App\Repositories;

use App\Repositories\Contracts\PedidoStatusPedidoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PedidoStatusPedidoRepositoryImplementation implements PedidoStatusPedidoRepository
{
    /**
     * Retorna PedidoStatusPedido baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPedidoStatusPedido(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de PedidoStatusPedido baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPedidoStatusPedidos(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo PedidoStatusPedido
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createPedidoStatusPedido(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um PedidoStatusPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updatePedidoStatusPedido(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um PedidoStatusPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deletePedidoStatusPedido(int $id): bool
    {

    }
}