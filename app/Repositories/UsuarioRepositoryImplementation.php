<?php

namespace App\Repositories;

use App\Repositories\Contracts\UsuarioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class UsuarioRepositoryImplementation implements UsuarioRepository
{
    /**
     * Retorna Usuario baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getUsuario(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de Usuario baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getUsuarios(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo Usuario
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createUsuario(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um Usuario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateUsuario(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um Usuario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteUsuario(int $id): bool
    {

    }
}