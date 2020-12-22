<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface EnderecoFornecedorRepository
{
    /**
     * Retorna EnderecoFornecedor baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEnderecoFornecedor(int $id): ?Model;

    /**
     * Retorna uma coleção de EnderecoFornecedor baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEnderecoFornecedors(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo EnderecoFornecedor
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEnderecoFornecedor(array $detalhes): ?Model;

    /**
     * Atualiza um EnderecoFornecedor
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEnderecoFornecedor(int $id, array $detalhes): ?Model;

    /**
     * Deleta um EnderecoFornecedor
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEnderecoFornecedor(int $id): bool;
}