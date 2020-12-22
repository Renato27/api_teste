<?php

namespace App\Repositories;

use App\Repositories\Contracts\TransportadoraCompraRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class TransportadoraCompraRepositoryImplementation implements TransportadoraCompraRepository
{
    /**
     * Retorna TransportadoraCompra baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getTransportadoraCompra(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de TransportadoraCompra baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getTransportadoraCompras(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo TransportadoraCompra
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createTransportadoraCompra(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um TransportadoraCompra
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateTransportadoraCompra(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um TransportadoraCompra
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteTransportadoraCompra(int $id): bool
    {

    }
}