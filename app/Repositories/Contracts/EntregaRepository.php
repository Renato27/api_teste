<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface EntregaRepository
{
    /**
     * Retorna Entrega baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEntrega(int $id): ?Model;

    /**
     * Retorna uma coleção de Entrega baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEntregas(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo Entrega
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEntrega(array $detalhes): ?Model;

    /**
     * Atualiza um Entrega
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEntrega(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Entrega
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEntrega(int $id): bool;
}