<?php

namespace App\Repositories;

use App\Repositories\Contracts\NotaPatrimonioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class NotaPatrimonioRepositoryImplementation implements NotaPatrimonioRepository
{
    /**
     * Retorna NotaPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getNotaPatrimonio(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de NotaPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getNotaPatrimonios(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo NotaPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createNotaPatrimonio(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um NotaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateNotaPatrimonio(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um NotaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteNotaPatrimonio(int $id): bool
    {

    }
}