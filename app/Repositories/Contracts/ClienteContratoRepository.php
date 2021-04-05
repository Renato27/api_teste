<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ClienteContratoRepository
{
    /**
     * Retorna ClienteContrato baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getClienteByContrato(int $contrato): ?Model;

    /**
     * Retorna uma coleção de ClienteContrato baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContratosByCliente(int $cliente): ?Collection;

    /**
     * Cria um novo ClienteContrato.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createClienteContrato(array $detalhes): ?Model;

    /**
     * Atualiza um ClienteContrato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateClienteContrato(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ClienteContrato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteClienteContrato(int $id): bool;
}
