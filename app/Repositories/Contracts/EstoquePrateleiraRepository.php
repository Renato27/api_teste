<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface EstoquePrateleiraRepository
{
    /**
     * Retorna EstoquePrateleira baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEstoquePrateleira(int $id): ?Model;

    /**
     * Retorna uma coleção de EstoquePrateleira baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEstoquePrateleiras(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo EstoquePrateleira
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEstoquePrateleira(array $detalhes): ?Model;

    /**
     * Atualiza um EstoquePrateleira
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEstoquePrateleira(int $id, array $detalhes): ?Model;

    /**
     * Deleta um EstoquePrateleira
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEstoquePrateleira(int $id): bool;
}