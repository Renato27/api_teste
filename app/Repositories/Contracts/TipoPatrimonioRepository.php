<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface TipoPatrimonioRepository
{
    /**
     * Retorna TipoPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getTipoPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de TipoPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getTipoPatrimonios(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo TipoPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createTipoPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um TipoPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateTipoPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um TipoPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteTipoPatrimonio(int $id): bool;
}