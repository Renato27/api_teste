<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface FuncionarioRepository
{
    /**
     * Retorna Funcionario baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getFuncionario(int $id): ?Model;

    /**
     * Retorna uma coleção de Funcionario baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getFuncionarios(): ?Collection;

    /**
     * Cria um novo Funcionario.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFuncionario(array $detalhes): ?Model;

    /**
     * Atualiza um Funcionario.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateFuncionario(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Funcionario.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFuncionario(int $id): bool;
}
