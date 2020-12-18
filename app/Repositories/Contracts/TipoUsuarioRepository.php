<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface TipoUsuarioRepository
{
    /**
     * Retorna TipoUsuario baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getTipoUsuario(int $id): ?Model;

    /**
     * Retorna uma coleção de TipoUsuario baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getTipoUsuarios(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo TipoUsuario
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createTipoUsuario(array $detalhes): ?Model;

    /**
     * Atualiza um TipoUsuario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateTipoUsuario(int $id, array $detalhes): ?Model;

    /**
     * Deleta um TipoUsuario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteTipoUsuario(int $id): bool;
}