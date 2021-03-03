<?php

namespace App\Repositories;

use App\Repositories\Contracts\PreventivaPatrimonioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PreventivaPatrimonioRepositoryImplementation implements PreventivaPatrimonioRepository
{
    /**
     * Retorna PreventivaPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPreventivaPatrimonio(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de PreventivaPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPreventivaPatrimonios(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo PreventivaPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createPreventivaPatrimonio(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um PreventivaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updatePreventivaPatrimonio(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um PreventivaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deletePreventivaPatrimonio(int $id): bool
    {

    }
}