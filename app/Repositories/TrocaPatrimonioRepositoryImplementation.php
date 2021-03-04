<?php

namespace App\Repositories;

use App\Repositories\Contracts\TrocaPatrimonioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class TrocaPatrimonioRepositoryImplementation implements TrocaPatrimonioRepository
{
    /**
     * Retorna TrocaPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getTrocaPatrimonio(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de TrocaPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getTrocaPatrimonios(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo TrocaPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createTrocaPatrimonio(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um TrocaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateTrocaPatrimonio(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um TrocaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteTrocaPatrimonio(int $id): bool
    {

    }
}