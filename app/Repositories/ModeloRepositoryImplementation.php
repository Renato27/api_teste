<?php

namespace App\Repositories;

use App\Repositories\Contracts\ModeloRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ModeloRepositoryImplementation implements ModeloRepository
{
    /**
     * Retorna Modelo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getModelo(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de Modelo baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getModelos(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo Modelo
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createModelo(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um Modelo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateModelo(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um Modelo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteModelo(int $id): bool
    {

    }
}