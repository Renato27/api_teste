<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface CobrancaAtividadeRepository
{
    /**
     * Retorna CobrancaAtividade baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getCobrancaAtividade(int $id): ?Model;

    /**
     * Retorna uma coleção de CobrancaAtividade baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getCobrancaAtividades(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo CobrancaAtividade.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createCobrancaAtividade(array $detalhes): ?Model;

    /**
     * Atualiza um CobrancaAtividade.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateCobrancaAtividade(int $id, array $detalhes): ?Model;

    /**
     * Deleta um CobrancaAtividade.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteCobrancaAtividade(int $id): bool;
}
