<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface EntregaRepository
{
    /**
     * Retorna Entrega baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getEntrega(int $id): ?Model;

    /**
     * Retorna uma coleção de Entrega baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getEntregas(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo Entrega.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEntrega(array $detalhes): ?Model;

    /**
     * Atualiza um Entrega.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEntrega(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Entrega.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEntrega(int $id): bool;
}
