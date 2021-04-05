<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface TrocaRepository
{
    /**
     * Retorna Troca baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getTroca(int $id): ?Model;

    /**
     * Retorna uma coleção de Troca baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTrocas(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo Troca.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTroca(array $detalhes): ?Model;

    /**
     * Atualiza um Troca.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTroca(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Troca.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTroca(int $id): bool;
}
