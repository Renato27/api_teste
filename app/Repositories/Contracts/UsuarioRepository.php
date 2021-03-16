<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface UsuarioRepository
{
    /**
     * Retorna Usuario baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getUsuario(int $id): ?Model;

    /**
     * Retorna uma coleção de Usuario baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getUsuarios(): ?Collection;

    /**
     * Cria um novo Usuario.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createUsuario(array $detalhes): ?Model;

    /**
     * Atualiza um Usuario.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateUsuario(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Usuario.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteUsuario(int $id): bool;

    public function verificarCredenciasUsuario(string $email, string $password) : ?Model;
}
