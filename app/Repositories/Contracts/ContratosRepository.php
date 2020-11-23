<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ContratosRepository
{
    /**
     * Retorna Contratos baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContrato(int $id): ?Model;

    /**
     * Retorna uma coleção de Contratos baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContratos(): ?Collection;
    
    /**
     * Cria um novo Contratos
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContrato(array $detalhes): ?Model;

    /**
     * Atualiza um Contratos
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContrato(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Contratos
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContrato(int $id): bool;
}