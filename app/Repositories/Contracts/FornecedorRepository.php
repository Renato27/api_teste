<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface FornecedorRepository
{
    /**
     * Retorna Fornecedor baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getFornecedor(int $id): ?Model;

    /**
     * Retorna uma coleção de Fornecedor baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getFornecedores(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo Fornecedor.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFornecedor(array $detalhes): ?Model;

    /**
     * Atualiza um Fornecedor.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateFornecedor(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Fornecedor.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFornecedor(int $id): bool;
}
