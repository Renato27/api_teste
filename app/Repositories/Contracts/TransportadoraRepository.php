<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface TransportadoraRepository
{
    /**
     * Retorna Transportadora baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getTransportadora(int $id): ?Model;

    /**
     * Retorna uma coleção de Transportadora baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getTransportadoras(): ?Collection;

    /**
     * Cria um novo Transportadora
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTransportadora(array $detalhes): ?Model;

    /**
     * Atualiza um Transportadora
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTransportadora(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Transportadora
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTransportadora(int $id): bool;
}
