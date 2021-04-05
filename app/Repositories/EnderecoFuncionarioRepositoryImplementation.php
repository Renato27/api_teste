<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\EnderecoFuncionarioRepository;

class EnderecoFuncionarioRepositoryImplementation implements EnderecoFuncionarioRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna EnderecoFuncionario baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getEnderecoFuncionario(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de EnderecoFuncionario baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getEnderecoFuncionarios(int $id, int $associacao): ?Collection
    {
        return $this;
    }

    /**
     * Cria um novo EnderecoFuncionario.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEnderecoFuncionario(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um EnderecoFuncionario.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEnderecoFuncionario(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um EnderecoFuncionario.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEnderecoFuncionario(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
