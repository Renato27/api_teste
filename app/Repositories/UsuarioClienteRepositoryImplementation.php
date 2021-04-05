<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\UsuarioClienteRepository;

class UsuarioClienteRepositoryImplementation implements UsuarioClienteRepository
{
    /**
     * Retorna UsuarioCliente baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getUsuarioCliente(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de UsuarioCliente baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getUsuarioClientes(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo UsuarioCliente.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createUsuarioCliente(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um UsuarioCliente.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateUsuarioCliente(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um UsuarioCliente.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteUsuarioCliente(int $id): bool
    {
    }
}
