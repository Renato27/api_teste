<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface StatusPedidoRepository
{
    /**
     * Retorna StatusPedido baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getStatusPedido(int $id): ?Model;

    /**
     * Retorna uma coleção de StatusPedido baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getStatusPedidos(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo StatusPedido.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createStatusPedido(array $detalhes): ?Model;

    /**
     * Atualiza um StatusPedido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateStatusPedido(int $id, array $detalhes): ?Model;

    /**
     * Deleta um StatusPedido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteStatusPedido(int $id): bool;
}
