<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ModeloRepository
{
    /**
     * Retorna Modelo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getModelo(int $id): ?Model;

    /**
     * Retorna uma coleção de Modelo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getModelos(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo Modelo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createModelo(array $detalhes): ?Model;

    /**
     * Atualiza um Modelo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateModelo(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Modelo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteModelo(int $id): bool;
}
