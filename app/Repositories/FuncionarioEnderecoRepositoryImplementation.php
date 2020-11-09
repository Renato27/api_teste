<?php

namespace App\Repositories;

use App\Repositories\Contracts\FuncionarioEnderecoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class FuncionarioEnderecoRepositoryImplementation implements FuncionarioEnderecoRepository
{
    /**
     * Retorna FuncionarioEndereco baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getFuncionarioEndereco(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de FuncionarioEndereco baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getFuncionarioEnderecos(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo FuncionarioEndereco
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createFuncionarioEndereco(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um FuncionarioEndereco
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateFuncionarioEndereco(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um FuncionarioEndereco
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteFuncionarioEndereco(int $id): bool
    {

    }
}