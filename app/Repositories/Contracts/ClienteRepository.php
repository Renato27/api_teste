<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ClienteRepository
{
    /**
     * Retorna cliente baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getcliente(int $id): ?Model;

    /**
     * Retorna uma coleção de cliente baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getclientes(): ?Collection;

    /**
     * Cria um novo cliente.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createcliente(array $detalhes): ?Model;

    /**
     * Atualiza um cliente.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatecliente(int $id, array $detalhes): ?Model;

    /**
     * Deleta um cliente.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletecliente(int $id): bool;
}
