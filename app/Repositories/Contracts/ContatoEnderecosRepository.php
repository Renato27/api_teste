<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ContatoEnderecosRepository
{
   
    

    /**
     * Retorna ContatoEnderecos baseado no endereco.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContatoEndereco(int $endereco): ?Model;

    /**
     * Retorna uma coleção de ContatoEnderecos baseado em um endereco.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContatosEnderecos(int $endereco): ?Collection;
    
    /**
     * Cria um novo ContatoEnderecos
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContatoEnderecos(array $detalhes): ?Model;

    /**
     * Atualiza um ContatoEnderecos
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContatoEnderecos(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ContatoEnderecos
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContatoEnderecos(int $id): bool;
}