<?php

namespace App\Repositories;

use App\Repositories\Contracts\FornecedorEnderecoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class FornecedorEnderecoRepositoryImplementation implements FornecedorEnderecoRepository
{
    /**
     * Retorna FornecedorEndereco baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getFornecedorEndereco(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de FornecedorEndereco baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getFornecedorEnderecos(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo FornecedorEndereco
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createFornecedorEndereco(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um FornecedorEndereco
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateFornecedorEndereco(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um FornecedorEndereco
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteFornecedorEndereco(int $id): bool
    {

    }
}