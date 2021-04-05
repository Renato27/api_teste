<?php

namespace App\Repositories;

use App\Repositories\Contracts\EstoqueFileirasRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EstoqueFileirasRepositoryImplementation implements EstoqueFileirasRepository
{
    /**
     * Retorna EstoqueFileiras baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEstoqueFileiras(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de EstoqueFileiras baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEstoqueFileirass(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo EstoqueFileiras
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEstoqueFileiras(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um EstoqueFileiras
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEstoqueFileiras(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um EstoqueFileiras
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEstoqueFileiras(int $id): bool
    {

    }
}