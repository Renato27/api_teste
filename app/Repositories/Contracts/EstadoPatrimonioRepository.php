<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface EstadoPatrimonioRepository
{
    /**
     * Retorna EstadoPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getEstadoPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de EstadoPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getEstadoPatrimonios(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo EstadoPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEstadoPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um EstadoPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEstadoPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um EstadoPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEstadoPatrimonio(int $id): bool;
}
