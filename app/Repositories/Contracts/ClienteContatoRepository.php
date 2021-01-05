<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ClienteContatoRepository
{
    /**
     * Retorna ClienteContato baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getAssociacaoByCliente(int $cliente): ?Model;

    /**
     * Retorna uma coleção de ClienteContato baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContatosByCliente(int $cliente): ?Collection;

    /**
     * Cria um novo ClienteContato
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createClienteContato(array $detalhes): ?Model;

    /**
     * Atualiza um ClienteContato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateClienteContato(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ClienteContato
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
