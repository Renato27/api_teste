<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface EnderecoRepository
{
    /**
     * Retorna Endereco baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getEndereco(int $id): ?Model;

    /**
     * Retorna uma coleção de Endereco baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getEnderecos(): ?Collection;

    /**
     * Cria um novo Endereco.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEndereco(array $detalhes): ?Model;

    /**
     * Atualiza um Endereco.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEndereco(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Endereco.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEndereco(int $id): bool;
}
