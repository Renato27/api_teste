<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\FuncionarioRepository;

class FuncionarioRepositoryImplementation implements FuncionarioRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Funcionario baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getFuncionario(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Funcionario baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getFuncionarios(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Cria um novo Funcionario.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFuncionario(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Funcionario.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateFuncionario(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Funcionario.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFuncionario(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
