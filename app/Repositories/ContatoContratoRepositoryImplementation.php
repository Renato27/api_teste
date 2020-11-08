<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContatoContratoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContatoContratoRepositoryImplementation implements ContatoContratoRepository
{
    /**
     * Retorna ContatoContrato baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContatoContrato(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de ContatoContrato baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContatoContratos(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo ContatoContrato
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContatoContrato(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um ContatoContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContatoContrato(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um ContatoContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContatoContrato(int $id): bool
    {

    }
}