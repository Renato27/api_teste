<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface TipoPatrimonioRepository
{
    /**
     * Retorna TipoPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getTipoPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de TipoPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTipoPatrimonios(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo TipoPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTipoPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um TipoPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTipoPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um TipoPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTipoPatrimonio(int $id): bool;
}
