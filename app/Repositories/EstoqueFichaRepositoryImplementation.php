<?php

namespace App\Repositories;

use App\Repositories\Contracts\EstoqueFichaRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EstoqueFichaRepositoryImplementation implements EstoqueFichaRepository
{
    /**
     * Retorna EstoqueFicha baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEstoqueFicha(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de EstoqueFicha baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEstoqueFichas(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo EstoqueFicha
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEstoqueFicha(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um EstoqueFicha
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEstoqueFicha(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um EstoqueFicha
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEstoqueFicha(int $id): bool
    {

    }
}