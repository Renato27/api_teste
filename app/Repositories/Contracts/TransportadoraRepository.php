<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface TransportadoraRepository
{
    /**
     * Retorna Transportadora baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getTransportadora(int $id): ?Model;

    /**
     * Retorna uma coleção de Transportadora baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTransportadoras(): ?Collection;

    /**
     * Cria um novo Transportadora.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTransportadora(array $detalhes): ?Model;

    /**
     * Atualiza um Transportadora.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTransportadora(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Transportadora.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTransportadora(int $id): bool;
}
