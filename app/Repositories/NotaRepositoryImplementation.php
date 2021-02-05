<?php

namespace App\Repositories;

use App\Repositories\Contracts\NotaRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class NotaRepositoryImplementation implements NotaRepository
{
    /**
     * Retorna Nota baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getNota(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de Nota baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getNotas(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo Nota
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createNota(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um Nota
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateNota(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um Nota
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteNota(int $id): bool
    {

    }
}