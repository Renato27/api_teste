<?php

namespace App\Repositories;

use App\Repositories\Contracts\EstoqueCorredorRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EstoqueCorredorRepositoryImplementation implements EstoqueCorredorRepository
{
    /**
     * Retorna EstoqueCorredor baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEstoqueCorredor(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de EstoqueCorredor baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEstoqueCorredors(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo EstoqueCorredor
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEstoqueCorredor(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um EstoqueCorredor
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEstoqueCorredor(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um EstoqueCorredor
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEstoqueCorredor(int $id): bool
    {

    }
}