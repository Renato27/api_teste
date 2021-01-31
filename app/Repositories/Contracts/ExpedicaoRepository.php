<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ExpedicaoRepository
{
    /**
     * Retorna Expedicao baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getExpedicao(int $id): ?Model;

    /**
     * Retorna uma coleção de Expedicao baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getExpedicaos(): ?Collection;

    /**
     * Undocumented function
     *
     * @param integer $pedido
     * @return Model|null
     */
    public function getExpedicaoByPedido(int $pedido) : ?Model;

    /**
     * Cria um novo Expedicao
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createExpedicao(array $detalhes): ?Model;


    /**
     * Atualiza um Expedicao
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateExpedicao(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Expedicao
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteExpedicao(int $id): bool;
}
