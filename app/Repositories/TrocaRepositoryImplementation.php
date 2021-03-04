<?php

namespace App\Repositories;

use App\Repositories\Contracts\TrocaRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class TrocaRepositoryImplementation implements TrocaRepository
{
    /**
     * Retorna Troca baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getTroca(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de Troca baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getTrocas(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo Troca
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createTroca(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um Troca
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateTroca(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um Troca
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteTroca(int $id): bool
    {

    }
}