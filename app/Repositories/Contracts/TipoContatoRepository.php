<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface TipoContatoRepository
{
    /**
     * Retorna TipoContato baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getTipoContato(int $id): ?Model;

    /**
     * Retorna uma coleção de TipoContato baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTipoContatos(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo TipoContato.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTipoContato(array $detalhes): ?Model;

    /**
     * Atualiza um TipoContato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTipoContato(int $id, array $detalhes): ?Model;

    /**
     * Deleta um TipoContato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTipoContato(int $id): bool;
}
