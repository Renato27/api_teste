<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\FornecedorRepository;

class FornecedorRepositoryImplementation implements FornecedorRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Fornecedor baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getFornecedor(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Fornecedor baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getFornecedores(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo Fornecedor.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFornecedor(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Fornecedor.
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
     * Deleta um Fornecedor.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFornecedor(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
