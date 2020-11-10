<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ClienteContratoRepository
{
    /**
     * Retorna ClienteContrato baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getClienteByContrato(int $contrato): ?Model;

    /**
     * Retorna uma coleção de ClienteContrato baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContratosByCliente(int $cliente): ?Collection;
    
    /**
     * Cria um novo ClienteContrato
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createClienteContrato(array $detalhes): ?Model;

    /**
     * Atualiza um ClienteContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateClienteContrato(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ClienteContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteClienteContrato(int $id): bool;
}