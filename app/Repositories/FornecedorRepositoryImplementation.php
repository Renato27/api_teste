<?php

namespace App\Repositories;

use App\Repositories\Contracts\FornecedorRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class FornecedorRepositoryImplementation implements FornecedorRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Fornecedor baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getFornecedor(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Fornecedor baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getFornecedores(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo Fornecedor
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFornecedor(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Fornecedor
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateFornecedor(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Fornecedor
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFornecedor(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
