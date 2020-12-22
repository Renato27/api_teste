<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface CompraRepository
{
    /**
     * Retorna Compra baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getCompra(int $id): ?Model;

    /**
     * Retorna uma coleção de Compra baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getCompras(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo Compra
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createCompra(array $detalhes): ?Model;

    /**
     * Atualiza um Compra
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateCompra(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Compra
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteCompra(int $id): bool;
}