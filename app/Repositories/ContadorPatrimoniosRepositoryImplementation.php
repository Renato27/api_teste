<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContadorPatrimoniosRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContadorPatrimoniosRepositoryImplementation implements ContadorPatrimoniosRepository
{
    /**
     * Retorna ContadorPatrimonios baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContadorPatrimonios(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de ContadorPatrimonios baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContadorPatrimonioss(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo ContadorPatrimonios
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContadorPatrimonios(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um ContadorPatrimonios
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContadorPatrimonios(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um ContadorPatrimonios
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContadorPatrimonios(int $id): bool
    {

    }
}