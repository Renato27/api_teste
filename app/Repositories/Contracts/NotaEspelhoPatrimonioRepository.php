<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface NotaEspelhoPatrimonioRepository
{
    /**
     * Retorna NotaEspelhoPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getNotaEspelhoPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de NotaEspelhoPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getNotaEspelhoPatrimoniosByNotaEspelho(int $nota_espelho): ?Collection;

    /**
     * Cria um novo NotaEspelhoPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createNotaEspelhoPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um NotaEspelhoPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateNotaEspelhoPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um NotaEspelhoPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteNotaEspelhoPatrimonio(int $id): bool;
}
