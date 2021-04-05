<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ContratoItemDefinidoRepository
{
    /**
     * Retorna ContratoItemDefinido baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContratoItemDefinido(int $id): ?Model;

    /**
     * Retorna uma coleção de ContratoItemDefinido baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContratoItemDefinidos(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo ContratoItemDefinido.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContratoItemDefinido(array $detalhes): ?Model;

    /**
     * Atualiza um ContratoItemDefinido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContratoItemDefinido(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ContratoItemDefinido.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContratoItemDefinido(int $id): bool;
}
