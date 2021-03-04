<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface AberturaContadorRepository
{
    /**
     * Retorna AberturaContador baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getAberturaContador(int $id): ?Model;

    /**
     * Retorna uma coleção de AberturaContador baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getAberturaContadors(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo AberturaContador
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createAberturaContador(array $detalhes): ?Model;

    /**
     * Atualiza um AberturaContador
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateAberturaContador(int $id, array $detalhes): ?Model;

    /**
     * Deleta um AberturaContador
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteAberturaContador(int $id): bool;
}