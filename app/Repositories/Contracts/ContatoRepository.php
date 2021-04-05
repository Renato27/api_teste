<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ContatoRepository
{
    /**
     * Retorna Contato baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContato(int $id): ?Model;

    /**
     * Retorna uma coleção de Contato baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContatos(): ?Collection;

    /**
     * Cria um novo Contato.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContato(array $detalhes): ?Model;

    /**
     * Atualiza um Contato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContato(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Contato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContato(int $id): bool;
}
