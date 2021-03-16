<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ClienteContatoRepository
{
    /**
     * Retorna ClienteContato baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getAssociacaoByCliente(int $cliente): ?Model;

    /**
     * Retorna uma coleção de ClienteContato baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContatosByCliente(int $cliente): ?Collection;

    /**
     * Cria um novo ClienteContato.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createClienteContato(array $detalhes): ?Model;

    /**
     * Atualiza um ClienteContato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateClienteContato(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ClienteContato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteClienteContato(int $id): bool;

    // /**
    //  * Verifica se existe algum contato principal.
    //  *
    //  * @param integer $cliente
    //  * @return boolean
    //  */
    // public function existeAlgumPrincipal(int $cliente) : bool;
}
