<?php

namespace App\Repositories;

use App\Repositories\Contracts\CobrancaAtividadeRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CobrancaAtividadeRepositoryImplementation implements CobrancaAtividadeRepository
{
    /**
     * Retorna CobrancaAtividade baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getCobrancaAtividade(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de CobrancaAtividade baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getCobrancaAtividades(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo CobrancaAtividade
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createCobrancaAtividade(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um CobrancaAtividade
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateCobrancaAtividade(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um CobrancaAtividade
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteCobrancaAtividade(int $id): bool
    {

    }
}