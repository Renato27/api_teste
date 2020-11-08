<?php

namespace App\Repositories;

use App\Repositories\Contracts\FuncionarioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class FuncionarioRepositoryImplementation implements FuncionarioRepository
{
    /**
     * Retorna Funcionario baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getFuncionario(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de Funcionario baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getFuncionarios(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo Funcionario
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createFuncionario(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um Funcionario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateFuncionario(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um Funcionario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteFuncionario(int $id): bool
    {

    }
}