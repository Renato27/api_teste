<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContratoTipoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContratoTipoRepositoryImplementation implements ContratoTipoRepository
{
    /**
     * Retorna ContratoTipo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContratoTipo(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de ContratoTipo baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContratoTipos(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo ContratoTipo
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContratoTipo(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um ContratoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContratoTipo(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um ContratoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContratoTipo(int $id): bool
    {

    }
}