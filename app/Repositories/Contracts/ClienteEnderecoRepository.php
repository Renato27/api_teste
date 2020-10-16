<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ClienteEnderecoRepository
{
    /**
     * Retorna ClienteEndereco baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getClienteEndereco(int $cliente): ?Model;

    /**
     * Retorna uma coleção de ClienteEndereco baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getClienteEnderecos(int $cliente): ?Collection;
    
    /**
     * Cria um novo ClienteEndereco
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createClienteEndereco(array $detalhes): ?Model;

    /**
     * Atualiza um ClienteEndereco
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateClienteEndereco(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ClienteEndereco
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteClienteEndereco(int $id): bool;
}