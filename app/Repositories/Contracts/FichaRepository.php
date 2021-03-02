<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface FichaRepository
{
    /**
     * Retorna Ficha baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getFicha(int $id): ?Model;

    /**
     * Retorna uma coleção de Ficha baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getFichas(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo Ficha
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createFicha(array $detalhes): ?Model;

    /**
     * Atualiza um Ficha
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateFicha(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Ficha
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteFicha(int $id): bool;
}