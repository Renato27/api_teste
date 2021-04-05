<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface SuprimentoRepository
{
    /**
     * Retorna Suprimento baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getSuprimento(int $id): ?Model;

    /**
     * Retorna uma coleção de Suprimento baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getSuprimentos(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo Suprimento.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createSuprimento(array $detalhes): ?Model;

    /**
     * Atualiza um Suprimento.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateSuprimento(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Suprimento.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteSuprimento(int $id): bool;
}
