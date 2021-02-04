<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface NotaEspelhoEstadoRepository
{
    /**
     * Retorna NotaEspelhoEstado baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getNotaEspelhoEstado(int $id): ?Model;

    /**
     * Retorna uma coleção de NotaEspelhoEstado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getNotaEspelhoEstados(int $id, int $associacao): ?Collection;
    
    /**
     * Cria um novo NotaEspelhoEstado
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createNotaEspelhoEstado(array $detalhes): ?Model;

    /**
     * Atualiza um NotaEspelhoEstado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateNotaEspelhoEstado(int $id, array $detalhes): ?Model;

    /**
     * Deleta um NotaEspelhoEstado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteNotaEspelhoEstado(int $id): bool;
}