<?php

namespace App\Repositories;

use App\Repositories\Contracts\EnderecoFuncionarioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EnderecoFuncionarioRepositoryImplementation implements EnderecoFuncionarioRepository
{
    /**
     * Retorna EnderecoFuncionario baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEnderecoFuncionario(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de EnderecoFuncionario baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEnderecoFuncionarios(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo EnderecoFuncionario
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEnderecoFuncionario(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um EnderecoFuncionario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEnderecoFuncionario(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um EnderecoFuncionario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEnderecoFuncionario(int $id): bool
    {

    }
}