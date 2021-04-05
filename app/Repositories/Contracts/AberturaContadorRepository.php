<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface AberturaContadorRepository
{
    /**
     * Retorna AberturaContador baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getAberturaContador(int $id): ?Model;

    /**
     * Retorna uma coleção de AberturaContador baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getAberturaContadors(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo AberturaContador.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createAberturaContador(array $detalhes): ?Model;

    /**
     * Atualiza um AberturaContador.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateAberturaContador(int $id, array $detalhes): ?Model;

    /**
     * Deleta um AberturaContador.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteAberturaContador(int $id): bool;

    /**
     * Retorna os chamados de contador que devem ser abertos hoje.
     *
     * @return array
     */
    public function getAberturasContadorDoDia() : array;
}
