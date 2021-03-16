<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface AberturaContadorPatrimonioRepository
{
    /**
     * Retorna AberturaContadorPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getAberturaContadorPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de AberturaContadorPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getAberturaContadorPatrimonios(int $abertura_contador): ?Collection;

    /**
     * Cria um novo AberturaContadorPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createAberturaContadorPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um AberturaContadorPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateAberturaContadorPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um AberturaContadorPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteAberturaContadorPatrimonio(int $id): bool;
}
