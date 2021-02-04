<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface NotaEspelhoPatrimonioRepository
{
    /**
     * Retorna NotaEspelhoPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getNotaEspelhoPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de NotaEspelhoPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getNotaEspelhoPatrimonios(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo NotaEspelhoPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createNotaEspelhoPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um NotaEspelhoPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateNotaEspelhoPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um NotaEspelhoPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteNotaEspelhoPatrimonio(int $id): bool;
}