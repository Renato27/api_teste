<?php

namespace App\Repositories;

use App\Repositories\Contracts\EstoqueRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EstoqueRepositoryImplementation implements EstoqueRepository
{
    /**
     * Retorna Estoque baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEstoque(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de Estoque baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEstoques(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo Estoque
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createEstoque(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um Estoque
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateEstoque(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um Estoque
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteEstoque(int $id): bool
    {

    }
}