<?php

namespace App\Repositories;

use App\Repositories\Contracts\ExpedicaoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ExpedicaoRepositoryImplementation implements ExpedicaoRepository
{
    /**
     * Retorna Expedicao baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getExpedicao(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de Expedicao baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getExpedicaos(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo Expedicao
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createExpedicao(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um Expedicao
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateExpedicao(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um Expedicao
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteExpedicao(int $id): bool
    {

    }
}