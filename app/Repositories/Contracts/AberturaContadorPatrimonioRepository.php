<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface AberturaContadorPatrimonioRepository
{
    /**
     * Retorna AberturaContadorPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getAberturaContadorPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de AberturaContadorPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getAberturaContadorPatrimonios(int $abertura_contador): ?Collection;

    /**
     * Cria um novo AberturaContadorPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createAberturaContadorPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um AberturaContadorPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateAberturaContadorPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um AberturaContadorPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteAberturaContadorPatrimonio(int $id): bool;
}
