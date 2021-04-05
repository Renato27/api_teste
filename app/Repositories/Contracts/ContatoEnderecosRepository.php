<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ContatoEnderecosRepository
{
    /**
     * Retorna ContatoEnderecos baseado no endereco.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContatoEndereco(int $endereco): ?Model;

    /**
     * Retorna uma coleção de ContatoEnderecos baseado em um endereco.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContatosEnderecos(int $contato): ?Collection;

    /**
     * Cria um novo ContatoEnderecos.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContatoEnderecos(array $detalhes): ?Model;

    /**
     * Atualiza um ContatoEnderecos.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContatoEnderecos(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ContatoEnderecos.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContatoEnderecos(int $id): bool;
}
