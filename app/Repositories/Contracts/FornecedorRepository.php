<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface FornecedorRepository
{
    /**
     * Retorna Fornecedor baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getFornecedor(int $id): ?Model;

    /**
     * Retorna uma coleção de Fornecedor baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getFornecedors(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo Fornecedor
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createFornecedor(array $detalhes): ?Model;

    /**
     * Atualiza um Fornecedor
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateFornecedor(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Fornecedor
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteFornecedor(int $id): bool;
}