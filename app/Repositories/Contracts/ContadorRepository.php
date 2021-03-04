<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ContadorRepository
{
    /**
     * Retorna Contador baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContador(int $id): ?Model;

    /**
     * Retorna uma coleção de Contador baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContadors(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo Contador
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContador(array $detalhes): ?Model;

    /**
     * Atualiza um Contador
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContador(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Contador
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContador(int $id): bool;
}