<?php

namespace App\Repositories;

use App\Repositories\Contracts\FornecedorCompraRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class FornecedorCompraRepositoryImplementation implements FornecedorCompraRepository
{
    /**
     * Retorna FornecedorCompra baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getFornecedorCompra(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de FornecedorCompra baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getFornecedorCompras(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo FornecedorCompra
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createFornecedorCompra(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um FornecedorCompra
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateFornecedorCompra(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um FornecedorCompra
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteFornecedorCompra(int $id): bool
    {

    }
}