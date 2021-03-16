<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\DadoFuncionarioRepository;

class DadoFuncionarioRepositoryImplementation implements DadoFuncionarioRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna DadoFuncionario baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getDadoFuncionario(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de DadoFuncionario baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getDadoFuncionarios(int $id, int $associacao): ?Collection
    {
        return $this;
    }

    /**
     * Cria um novo DadoFuncionario.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createDadoFuncionario(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um DadoFuncionario.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateDadoFuncionario(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um DadoFuncionario.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteDadoFuncionario(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
