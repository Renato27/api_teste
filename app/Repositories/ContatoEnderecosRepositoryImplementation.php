<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContatoEnderecosRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContatoEnderecosRepositoryImplementation implements ContatoEnderecosRepository
{
    /**
     * Retorna ContatoEnderecos baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContatoEnderecos(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de ContatoEnderecos baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContatoEnderecoss(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo ContatoEnderecos
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContatoEnderecos(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um ContatoEnderecos
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContatoEnderecos(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um ContatoEnderecos
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContatoEnderecos(int $id): bool
    {

    }
}