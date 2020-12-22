<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface FabricanteRepository
{
    /**
     * Retorna Fabricante baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getFabricante(int $id): ?Model;

    /**
     * Retorna uma coleção de Fabricante baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getFabricantes(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo Fabricante
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createFabricante(array $detalhes): ?Model;

    /**
     * Atualiza um Fabricante
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateFabricante(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Fabricante
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteFabricante(int $id): bool;
}