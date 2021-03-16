<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ContatoTipoRepository
{
    /**
     * Retorna ContatoTipo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContatoTipo(int $contato): ?Model;

    /**
     * Retorna uma coleção de ContatoTipo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTipoContatos(int $tipo): ?Collection;

    /**
     * Cria um novo ContatoTipo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContatoTipo(array $detalhes): ?Model;

    /**
     * Atualiza um ContatoTipo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContatoTipo(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ContatoTipo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContatoTipo(int $id): bool;
}
