<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface NotaEspelhoEstadoRepository
{
    /**
     * Retorna NotaEspelhoEstado baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getNotaEspelhoEstado(int $id): ?Model;

    /**
     * Retorna uma coleção de NotaEspelhoEstado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getNotaEspelhoEstados(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo NotaEspelhoEstado.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createNotaEspelhoEstado(array $detalhes): ?Model;

    /**
     * Atualiza um NotaEspelhoEstado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateNotaEspelhoEstado(int $id, array $detalhes): ?Model;

    /**
     * Deleta um NotaEspelhoEstado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteNotaEspelhoEstado(int $id): bool;
}
