<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface TransportadoraCompraRepository
{
    /**
     * Retorna TransportadoraCompra baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getTransportadoraCompra(int $id): ?Model;

    /**
     * Retorna uma coleção de TransportadoraCompra baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTransportadoraCompras(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo TransportadoraCompra.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTransportadoraCompra(array $detalhes): ?Model;

    /**
     * Atualiza um TransportadoraCompra.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTransportadoraCompra(int $id, array $detalhes): ?Model;

    /**
     * Deleta um TransportadoraCompra.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTransportadoraCompra(int $id): bool;
}
