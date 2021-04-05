<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ContratoTipoRepository
{
    /**
     * Retorna ContratoTipo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContratoTipo(int $id): ?Model;

    /**
     * Retorna uma coleção de ContratoTipo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContratoTipos(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo ContratoTipo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContratoTipo(array $detalhes): ?Model;

    /**
     * Atualiza um ContratoTipo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContratoTipo(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ContratoTipo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContratoTipo(int $id): bool;
}
