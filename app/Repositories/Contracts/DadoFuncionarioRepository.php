<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface DadoFuncionarioRepository
{
    /**
     * Retorna DadoFuncionario baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getDadoFuncionario(int $id): ?Model;

    /**
     * Retorna uma coleção de DadoFuncionario baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getDadoFuncionarios(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo DadoFuncionario.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createDadoFuncionario(array $detalhes): ?Model;

    /**
     * Atualiza um DadoFuncionario.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateDadoFuncionario(int $id, array $detalhes): ?Model;

    /**
     * Deleta um DadoFuncionario.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteDadoFuncionario(int $id): bool;
}
