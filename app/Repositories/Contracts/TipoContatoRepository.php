<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface TipoContatoRepository
{
    /**
     * Retorna TipoContato baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getTipoContato(int $id): ?Model;

    /**
     * Retorna uma coleção de TipoContato baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getTipoContatos(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo TipoContato
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createTipoContato(array $detalhes): ?Model;

    /**
     * Atualiza um TipoContato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateTipoContato(int $id, array $detalhes): ?Model;

    /**
     * Deleta um TipoContato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteTipoContato(int $id): bool;
}