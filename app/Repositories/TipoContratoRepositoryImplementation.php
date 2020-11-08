<?php

namespace App\Repositories;

use App\Repositories\Contracts\TipoContratoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class TipoContratoRepositoryImplementation implements TipoContratoRepository
{
    /**
     * Retorna TipoContrato baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getTipoContrato(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de TipoContrato baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getTipoContratos(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo TipoContrato
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createTipoContrato(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um TipoContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateTipoContrato(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um TipoContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteTipoContrato(int $id): bool
    {

    }
}