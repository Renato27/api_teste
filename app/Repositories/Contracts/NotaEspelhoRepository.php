<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface NotaEspelhoRepository
{
    /**
     * Retorna NotaEspelho baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getNotaEspelho(int $id): ?Model;

    /**
     * Retorna uma coleção de NotaEspelho baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getNotaEspelhos(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo NotaEspelho
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createNotaEspelho(array $detalhes): ?Model;

    /**
     * Atualiza um NotaEspelho
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateNotaEspelho(int $id, array $detalhes): ?Model;

    /**
     * Deleta um NotaEspelho
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteNotaEspelho(int $id): bool;
}