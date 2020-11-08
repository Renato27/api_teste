<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContratoPagamentoMetodoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContratoPagamentoMetodoRepositoryImplementation implements ContratoPagamentoMetodoRepository
{
    /**
     * Retorna ContratoPagamentoMetodo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContratoPagamentoMetodo(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de ContratoPagamentoMetodo baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContratoPagamentoMetodos(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo ContratoPagamentoMetodo
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContratoPagamentoMetodo(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um ContratoPagamentoMetodo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContratoPagamentoMetodo(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um ContratoPagamentoMetodo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContratoPagamentoMetodo(int $id): bool
    {

    }
}