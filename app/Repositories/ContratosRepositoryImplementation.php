<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContratosRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContratosRepositoryImplementation implements ContratosRepository
{
    /**
     * Retorna Contratos baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContratos(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de Contratos baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContratoss(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo Contratos
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContratos(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um Contratos
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContratos(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um Contratos
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContratos(int $id): bool
    {

    }
}