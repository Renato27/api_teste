<?php

namespace App\Repositories;

use App\Repositories\Contracts\PedidoItemRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PedidoItemRepositoryImplementation implements PedidoItemRepository
{
    /**
     * Retorna PedidoItem baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPedidoItem(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de PedidoItem baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPedidoItems(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo PedidoItem
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createPedidoItem(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um PedidoItem
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updatePedidoItem(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um PedidoItem
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deletePedidoItem(int $id): bool
    {

    }
}