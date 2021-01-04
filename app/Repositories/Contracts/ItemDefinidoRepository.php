<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ItemDefinidoRepository
{
    /**
     * Retorna ItemDefinido baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getItemDefinido(int $id): ?Model;

    /**
     * Retorna uma coleção de ItemDefinido baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getItemDefinidos(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo ItemDefinido
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createItemDefinido(array $detalhes): ?Model;

    /**
     * Atualiza um ItemDefinido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateItemDefinido(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ItemDefinido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteItemDefinido(int $id): bool;
}