<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface SuporteInteracaoRepository
{
    /**
     * Retorna SuporteInteracao baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getSuporteInteracao(int $id): ?Model;

    /**
     * Retorna uma coleção de SuporteInteracao baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getSuporteInteracaos(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo SuporteInteracao.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createSuporteInteracao(array $detalhes): ?Model;

    /**
     * Atualiza um SuporteInteracao.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateSuporteInteracao(int $id, array $detalhes): ?Model;

    /**
     * Deleta um SuporteInteracao.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteSuporteInteracao(int $id): bool;
}
