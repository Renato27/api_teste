<?php

namespace App\Repositories;

use App\Repositories\Contracts\TrocaPatrimonioRetiradaRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class TrocaPatrimonioRetiradaRepositoryImplementation implements TrocaPatrimonioRetiradaRepository
{
    /**
     * Retorna TrocaPatrimonioRetirada baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getTrocaPatrimonioRetirada(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de TrocaPatrimonioRetirada baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getTrocaPatrimonioRetiradas(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo TrocaPatrimonioRetirada
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createTrocaPatrimonioRetirada(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um TrocaPatrimonioRetirada
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateTrocaPatrimonioRetirada(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um TrocaPatrimonioRetirada
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteTrocaPatrimonioRetirada(int $id): bool
    {

    }
}