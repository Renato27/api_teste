<?php

namespace App\Repositories;

use App\Repositories\Contracts\EstadoPatrimonioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EstadoPatrimonioRepositoryImplementation implements EstadoPatrimonioRepository
{
    /**
     * Retorna EstadoPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEstadoPatrimonio(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de EstadoPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEstadoPatrimonios(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo EstadoPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEstadoPatrimonio(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um EstadoPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEstadoPatrimonio(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um EstadoPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEstadoPatrimonio(int $id): bool
    {

    }
}