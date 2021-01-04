<?php

namespace App\Repositories;

use App\Repositories\Contracts\PatrimonioAlugadoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PatrimonioAlugadoRepositoryImplementation implements PatrimonioAlugadoRepository
{
    /**
     * Retorna PatrimonioAlugado baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPatrimonioAlugado(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de PatrimonioAlugado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonioAlugados(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo PatrimonioAlugado
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createPatrimonioAlugado(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um PatrimonioAlugado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updatePatrimonioAlugado(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um PatrimonioAlugado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deletePatrimonioAlugado(int $id): bool
    {

    }
}