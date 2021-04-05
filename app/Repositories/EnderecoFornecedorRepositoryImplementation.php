<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\EnderecoFornecedorRepository;

class EnderecoFornecedorRepositoryImplementation implements EnderecoFornecedorRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna EnderecoFornecedor baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getEnderecoFornecedor(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de EnderecoFornecedor baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getEnderecoFornecedors(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo EnderecoFornecedor.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEnderecoFornecedor(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um EnderecoFornecedor.
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
     * Deleta um EnderecoFornecedor.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEnderecoFornecedor(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
