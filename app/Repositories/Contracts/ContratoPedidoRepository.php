<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ContratoPedidoRepository
{
    /**
     * Retorna ContratoPedido baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContratoPedido(int $pedido): ?Model;

    /**
     * Retorna uma coleção de ContratoPedido baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContratoPedidos(int $contrato): ?Collection;

    /**
     * Cria um novo ContratoPedido.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContratoPedido(array $detalhes): ?Model;

    /**
     * Atualiza um ContratoPedido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContratoPedido(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ContratoPedido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContratoPedido(int $id): bool;
}
