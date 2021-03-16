<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ClienteEnderecoRepository
{
    /**
     * Retorna ClienteEndereco baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getClienteEndereco(int $cliente): ?Model;

    /**
     * Retorna uma coleção de ClienteEndereco baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getClienteEnderecos(int $cliente): ?Collection;

    /**
     * Cria um novo ClienteEndereco.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createClienteEndereco(array $detalhes): ?Model;

    /**
     * Atualiza um ClienteEndereco.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateClienteEndereco(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ClienteEndereco.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteClienteEndereco(int $id): bool;

    // /**
    //  * Verifica se existe algum endereço principal.
    //  *
    //  * @param integer $cliente
    //  * @return boolean
    //  */
    // public function existeAlgumPrincipal(int $cliente) : bool;
}
