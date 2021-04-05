<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface TrocaPatrimonioRepository
{
    /**
     * Retorna TrocaPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getTrocaPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de TrocaPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTrocaPatrimonios(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo TrocaPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTrocaPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um TrocaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTrocaPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um TrocaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTrocaPatrimonio(int $id): bool;
}
