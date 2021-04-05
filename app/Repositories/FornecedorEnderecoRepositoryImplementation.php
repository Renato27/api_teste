<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\FornecedorEnderecoRepository;

class FornecedorEnderecoRepositoryImplementation implements FornecedorEnderecoRepository
{
    /**
     * Retorna FornecedorEndereco baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getFornecedorEndereco(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de FornecedorEndereco baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getFornecedorEnderecos(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo FornecedorEndereco.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFornecedorEndereco(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um FornecedorEndereco.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateFornecedorEndereco(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um FornecedorEndereco.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFornecedorEndereco(int $id): bool
    {
    }
}
