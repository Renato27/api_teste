<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\FornecedorCompraRepository;

class FornecedorCompraRepositoryImplementation implements FornecedorCompraRepository
{
    /**
     * Retorna FornecedorCompra baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getFornecedorCompra(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de FornecedorCompra baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getFornecedorCompras(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo FornecedorCompra.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFornecedorCompra(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um FornecedorCompra.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateFornecedorCompra(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um FornecedorCompra.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFornecedorCompra(int $id): bool
    {
    }
}
