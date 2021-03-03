<?php

namespace App\Repositories;

use App\Repositories\Contracts\CorretivaRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CorretivaRepositoryImplementation implements CorretivaRepository
{
    /**
     * Retorna Corretiva baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getCorretiva(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de Corretiva baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getCorretivas(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo Corretiva
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createCorretiva(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um Corretiva
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateCorretiva(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um Corretiva
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteCorretiva(int $id): bool
    {

    }
}