<?php

namespace App\Repositories;

use App\Repositories\Contracts\EnderecoFornecedorRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EnderecoFornecedorRepositoryImplementation implements EnderecoFornecedorRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna EnderecoFornecedor baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEnderecoFornecedor(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de EnderecoFornecedor baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEnderecoFornecedors(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo EnderecoFornecedor
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEnderecoFornecedor(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um EnderecoFornecedor
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEnderecoFornecedor(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um EnderecoFornecedor
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEnderecoFornecedor(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
