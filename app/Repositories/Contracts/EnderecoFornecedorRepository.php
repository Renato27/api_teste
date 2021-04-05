<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface EnderecoFornecedorRepository
{
    /**
     * Retorna EnderecoFornecedor baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getEnderecoFornecedor(int $id): ?Model;

    /**
     * Retorna uma coleção de EnderecoFornecedor baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getEnderecoFornecedors(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo EnderecoFornecedor.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEnderecoFornecedor(array $detalhes): ?Model;

    /**
     * Atualiza um EnderecoFornecedor.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEnderecoFornecedor(int $id, array $detalhes): ?Model;

    /**
     * Deleta um EnderecoFornecedor.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEnderecoFornecedor(int $id): bool;
}
