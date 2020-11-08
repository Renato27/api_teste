<?php

namespace App\Repositories;

use App\Repositories\Contracts\StatusPedidoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class StatusPedidoRepositoryImplementation implements StatusPedidoRepository
{
    /**
     * Retorna StatusPedido baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getStatusPedido(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de StatusPedido baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getStatusPedidos(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo StatusPedido
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createStatusPedido(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um StatusPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateStatusPedido(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um StatusPedido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteStatusPedido(int $id): bool
    {

    }
}