<?php

namespace App\Repositories;

use App\Repositories\Contracts\CorretivaPatrimonioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CorretivaPatrimonioRepositoryImplementation implements CorretivaPatrimonioRepository
{
    /**
     * Retorna CorretivaPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getCorretivaPatrimonio(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de CorretivaPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getCorretivaPatrimonios(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo CorretivaPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createCorretivaPatrimonio(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um CorretivaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateCorretivaPatrimonio(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um CorretivaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteCorretivaPatrimonio(int $id): bool
    {

    }
}