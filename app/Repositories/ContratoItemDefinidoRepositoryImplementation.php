<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContratoItemDefinidoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContratoItemDefinidoRepositoryImplementation implements ContratoItemDefinidoRepository
{
    /**
     * Retorna ContratoItemDefinido baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContratoItemDefinido(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de ContratoItemDefinido baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContratoItemDefinidos(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo ContratoItemDefinido
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContratoItemDefinido(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um ContratoItemDefinido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContratoItemDefinido(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um ContratoItemDefinido
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContratoItemDefinido(int $id): bool
    {

    }
}