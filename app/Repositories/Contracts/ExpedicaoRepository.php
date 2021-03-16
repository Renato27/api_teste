<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ExpedicaoRepository
{
    /**
     * Retorna Expedicao baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getExpedicao(int $id): ?Model;

    /**
     * Retorna uma coleção de Expedicao baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getExpedicaos(): ?Collection;

    /**
     * Undocumented function.
     *
     * @param int $pedido
     * @return Model|null
     */
    public function getExpedicaoByPedido(int $pedido) : ?Model;

    /**
     * Cria um novo Expedicao.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createExpedicao(array $detalhes): ?Model;

    /**
     * Atualiza um Expedicao.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateExpedicao(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Expedicao.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteExpedicao(int $id): bool;
}
