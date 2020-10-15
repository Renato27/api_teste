<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ClienteRepository
{
    /**
     * Retorna cliente baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getcliente(int $id): ?Model;

    /**
     * Retorna uma coleção de cliente baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getclientes(): ?Collection;
    
    /**
     * Cria um novo cliente
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createcliente(array $detalhes): ?Model;

    /**
     * Atualiza um cliente
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updatecliente(int $id, array $detalhes): ?Model;

    /**
     * Deleta um cliente
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deletecliente(int $id): bool;
}