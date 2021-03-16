<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\PagamentoMetodoRepository;

class PagamentoMetodoRepositoryImplementation implements PagamentoMetodoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna PagamentoMetodo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getPagamentoMetodo(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de PagamentoMetodo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPagamentoMetodos(int $id, int $associacao): ?Collection
    {
        return $this;
    }

    /**
     * Cria um novo PagamentoMetodo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPagamentoMetodo(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um PagamentoMetodo.
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
     * Deleta um PagamentoMetodo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePagamentoMetodo(int $id): bool
    {
        $retorno = $this->delete($id);

        if ($retorno) {
            return false;
        }

        return true;
    }
}
