<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface TipoChamadoRepository
{
    /**
     * Retorna TipoChamado baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getTipoChamado(int $id): ?Model;

    /**
     * Retorna uma coleção de TipoChamado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTipoChamados(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo TipoChamado.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTipoChamado(array $detalhes): ?Model;

    /**
     * Atualiza um TipoChamado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTipoChamado(int $id, array $detalhes): ?Model;

    /**
     * Deleta um TipoChamado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTipoChamado(int $id): bool;
}
