<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ContatoEmailRepository
{
    /**
     * Retorna ContatoEmail baseado no contato.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContatoEmail(int $contato): ?Model;

    /**
     * Retorna uma coleção de ContatoEmail baseado em um contato.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContatoEmails(int $contato): ?Collection;

    /**
     * Cria um novo ContatoEmail.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContatoEmail(array $detalhes): ?Model;

    /**
     * Atualiza um ContatoEmail.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContatoEmail(int $contato, array $detalhes): ?Model;

    /**
     * Deleta um ContatoEmail.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContatoEmail(int $id): bool;

    /**
     * Verifica se o email cadastrado para o usuário pertence à algum contrato, caso não pertença a um contato, faz a criação.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function usuarioTemEmailContato(int $contatoId, string $usuarioEmail): bool;
}
