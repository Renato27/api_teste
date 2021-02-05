<?php

namespace App\Repositories;

use App\Repositories\Contracts\NotaEstadoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class NotaEstadoRepositoryImplementation implements NotaEstadoRepository
{
    /**
     * Retorna NotaEstado baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getNotaEstado(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de NotaEstado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getNotaEstados(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo NotaEstado
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createNotaEstado(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um NotaEstado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateNotaEstado(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um NotaEstado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteNotaEstado(int $id): bool
    {

    }
}