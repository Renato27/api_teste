<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface PagamentoMetodoRepository
{
    /**
     * Retorna PagamentoMetodo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getPagamentoMetodo(int $id): ?Model;

    /**
     * Retorna uma coleção de PagamentoMetodo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPagamentoMetodos(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo PagamentoMetodo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPagamentoMetodo(array $detalhes): ?Model;

    /**
     * Atualiza um PagamentoMetodo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePagamentoMetodo(int $id, array $detalhes): ?Model;

    /**
     * Deleta um PagamentoMetodo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePagamentoMetodo(int $id): bool;
}
