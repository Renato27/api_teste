<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface SuprimentoPatrimonioRepository
{
    /**
     * Retorna SuprimentoPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getSuprimentoPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de SuprimentoPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getSuprimentoPatrimonios(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo SuprimentoPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createSuprimentoPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um SuprimentoPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateSuprimentoPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um SuprimentoPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteSuprimentoPatrimonio(int $id): bool;
}