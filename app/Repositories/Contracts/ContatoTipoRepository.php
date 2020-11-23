<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ContatoTipoRepository
{
    /**
     * Retorna ContatoTipo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContatoTipo(int $contato): ?Model;

    /**
     * Retorna uma coleção de ContatoTipo baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getTipoContatos(int $tipo): ?Collection;
    
    /**
     * Cria um novo ContatoTipo
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createContatoTipo(array $detalhes): ?Model;

    /**
     * Atualiza um ContatoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateContatoTipo(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ContatoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteContatoTipo(int $id): bool;
}