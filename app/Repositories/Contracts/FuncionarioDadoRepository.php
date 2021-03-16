<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface FuncionarioDadoRepository
{
    /**
     * Retorna FuncionarioDado baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getFuncionarioDado(int $funcionario): ?Model;

    /**
     * Retorna uma coleção de FuncionarioDado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getFuncionarioDados(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo FuncionarioDado.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFuncionarioDado(array $detalhes): ?Model;

    /**
     * Atualiza um FuncionarioDado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateFuncionarioDado(int $id, array $detalhes): ?Model;

    /**
     * Deleta um FuncionarioDado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFuncionarioDado(int $id): bool;
}
