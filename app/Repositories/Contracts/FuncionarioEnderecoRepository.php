<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface FuncionarioEnderecoRepository
{
    /**
     * Retorna FuncionarioEndereco baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getFuncionarioEndereco(int $funcionario): ?Model;

    /**
     * Retorna uma coleção de FuncionarioEndereco baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getFuncionarioEnderecos(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo FuncionarioEndereco.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFuncionarioEndereco(array $detalhes): ?Model;

    /**
     * Atualiza um FuncionarioEndereco.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateFuncionarioEndereco(int $id, array $detalhes): ?Model;

    /**
     * Deleta um FuncionarioEndereco.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFuncionarioEndereco(int $id): bool;
}
