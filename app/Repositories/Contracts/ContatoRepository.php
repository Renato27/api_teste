<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ContatoRepository
{
    /**
     * Retorna Contato baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContato(int $id): ?Model;

    /**
     * Retorna uma coleção de Contato baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContatos(): ?Collection;
    
    /**
     * Cria um novo Contato
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContato(array $detalhes): ?Model;

    /**
     * Atualiza um Contato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContato(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Contato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContato(int $id): bool;
}