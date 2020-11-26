<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface EnderecoRepository
{
    /**
     * Retorna Endereco baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEndereco(int $id): ?Model;

    /**
     * Retorna uma coleção de Endereco baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEnderecos(): ?Collection;
    
    /**
     * Cria um novo Endereco
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEndereco(array $detalhes): ?Model;

    /**
     * Atualiza um Endereco
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEndereco(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Endereco
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEndereco(int $id): bool;
}