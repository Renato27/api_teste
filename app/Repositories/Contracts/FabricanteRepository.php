<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface FabricanteRepository
{
    /**
     * Retorna Fabricante baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getFabricante(int $id): ?Model;

    /**
     * Retorna uma coleção de Fabricante baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getFabricantes(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo Fabricante.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFabricante(array $detalhes): ?Model;

    /**
     * Atualiza um Fabricante.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateFabricante(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Fabricante.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFabricante(int $id): bool;
}
