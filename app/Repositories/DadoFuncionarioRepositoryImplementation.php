<?php

namespace App\Repositories;

use App\Repositories\Contracts\DadoFuncionarioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class DadoFuncionarioRepositoryImplementation implements DadoFuncionarioRepository
{
    /**
     * Retorna DadoFuncionario baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getDadoFuncionario(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de DadoFuncionario baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getDadoFuncionarios(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo DadoFuncionario
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createDadoFuncionario(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um DadoFuncionario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateDadoFuncionario(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um DadoFuncionario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteDadoFuncionario(int $id): bool
    {

    }
}