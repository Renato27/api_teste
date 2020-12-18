<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface UsuarioClienteRepository
{
    /**
     * Retorna UsuarioCliente baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getUsuarioCliente(int $id): ?Model;

    /**
     * Retorna uma coleção de UsuarioCliente baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getUsuarioClientes(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo UsuarioCliente
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createUsuarioCliente(array $detalhes): ?Model;

    /**
     * Atualiza um UsuarioCliente
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateUsuarioCliente(int $id, array $detalhes): ?Model;

    /**
     * Deleta um UsuarioCliente
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteUsuarioCliente(int $id): bool;
}