<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface CobrancaNotaRepository
{
    /**
     * Retorna CobrancaNota baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getCobrancaNota(int $id): ?Model;

    /**
     * Retorna uma coleção de CobrancaNota baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getCobrancaNotas(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo CobrancaNota.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createCobrancaNota(array $detalhes): ?Model;

    /**
     * Atualiza um CobrancaNota.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateCobrancaNota(int $id, array $detalhes): ?Model;

    /**
     * Deleta um CobrancaNota.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteCobrancaNota(int $id): bool;
}
