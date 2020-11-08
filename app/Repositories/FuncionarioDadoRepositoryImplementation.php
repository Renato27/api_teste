<?php

namespace App\Repositories;

use App\Repositories\Contracts\FuncionarioDadoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class FuncionarioDadoRepositoryImplementation implements FuncionarioDadoRepository
{
    /**
     * Retorna FuncionarioDado baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getFuncionarioDado(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de FuncionarioDado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getFuncionarioDados(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo FuncionarioDado
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createFuncionarioDado(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um FuncionarioDado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateFuncionarioDado(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um FuncionarioDado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteFuncionarioDado(int $id): bool
    {

    }
}