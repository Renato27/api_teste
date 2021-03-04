<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface SuporteRepository
{
    /**
     * Retorna Suporte baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getSuporte(int $id): ?Model;

    /**
     * Retorna uma coleção de Suporte baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getSuportes(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo Suporte
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createSuporte(array $detalhes): ?Model;

    /**
     * Atualiza um Suporte
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateSuporte(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Suporte
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteSuporte(int $id): bool;
}