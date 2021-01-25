<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface RetiradaRepository
{
    /**
     * Retorna Retirada baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getRetirada(int $id): ?Model;

    /**
     * Retorna uma coleção de Retirada baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getRetiradas(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo Retirada
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createRetirada(array $detalhes): ?Model;

    /**
     * Atualiza um Retirada
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateRetirada(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Retirada
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteRetirada(int $id): bool;
}