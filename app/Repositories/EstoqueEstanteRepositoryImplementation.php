<?php

namespace App\Repositories;

use App\Repositories\Contracts\EstoqueEstanteRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EstoqueEstanteRepositoryImplementation implements EstoqueEstanteRepository
{
    /**
     * Retorna EstoqueEstante baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEstoqueEstante(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de EstoqueEstante baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEstoqueEstantes(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo EstoqueEstante
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEstoqueEstante(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um EstoqueEstante
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEstoqueEstante(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um EstoqueEstante
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEstoqueEstante(int $id): bool
    {

    }
}