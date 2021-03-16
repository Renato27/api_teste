<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface FichaRepository
{
    /**
     * Retorna Ficha baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getFicha(int $id): ?Model;

    /**
     * Retorna uma coleção de Ficha baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getFichas(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo Ficha.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFicha(array $detalhes): ?Model;

    /**
     * Atualiza um Ficha.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateFicha(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Ficha.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFicha(int $id): bool;
}
