<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface TipoContratoRepository
{
    /**
     * Retorna TipoContrato baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getTipoContrato(int $contrato): ?Model;

    /**
     * Retorna uma coleção de TipoContrato baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTipoContratos(int $tipo): ?Collection;

    /**
     * Cria um novo TipoContrato.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTipoContrato(array $detalhes): ?Model;

    /**
     * Atualiza um TipoContrato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTipoContrato(int $id, array $detalhes): ?Model;

    /**
     * Deleta um TipoContrato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTipoContrato(int $id): bool;
}
