<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface EstoqueSalaRepository
{
    /**
     * Retorna EstoqueSala baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEstoqueSala(int $id): ?Model;

    /**
     * Retorna uma coleção de EstoqueSala baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEstoqueSalas(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo EstoqueSala
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEstoqueSala(array $detalhes): ?Model;

    /**
     * Atualiza um EstoqueSala
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEstoqueSala(int $id, array $detalhes): ?Model;

    /**
     * Deleta um EstoqueSala
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEstoqueSala(int $id): bool;
}