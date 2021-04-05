<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ContatoContratoRepository
{
    /**
     * Retorna ContatoContrato baseado no contrato.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContatoContrato(int $contrato): ?Model;

    /**
     * Retorna uma coleção de ContatoContrato baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContratosByContato(int $contato): ?Collection;

    /**
     * Cria um novo ContatoContrato.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContatoContrato(array $detalhes): ?Model;

    /**
     * Atualiza um ContatoContrato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContatoContrato(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ContatoContrato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContatoContrato(int $id): bool;
}
