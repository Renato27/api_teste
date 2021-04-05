<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface EstoqueArmarioRepository
{
    /**
     * Retorna EstoqueArmario baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEstoqueArmario(int $id): ?Model;

    /**
     * Retorna uma coleção de EstoqueArmario baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEstoqueArmarios(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo EstoqueArmario
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEstoqueArmario(array $detalhes): ?Model;

    /**
     * Atualiza um EstoqueArmario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEstoqueArmario(int $id, array $detalhes): ?Model;

    /**
     * Deleta um EstoqueArmario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEstoqueArmario(int $id): bool;
}