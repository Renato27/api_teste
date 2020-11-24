<?php

namespace App\Repositories;

use App\Repositories\Contracts\PagamentoMetodoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PagamentoMetodoRepositoryImplementation implements PagamentoMetodoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna PagamentoMetodo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPagamentoMetodo(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de PagamentoMetodo baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPagamentoMetodos(int $id, int $associacao): ?Collection
    {
        return $this;
    }

    /**
     * Cria um novo PagamentoMetodo
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createPagamentoMetodo(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um PagamentoMetodo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updatePagamentoMetodo(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um PagamentoMetodo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deletePagamentoMetodo(int $id): bool
    {
        $retorno = $this->delete($id);

        if($retorno) return false;

        return true;
    }
}