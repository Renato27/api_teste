<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\FuncionarioEnderecoRepository;

class FuncionarioEnderecoRepositoryImplementation implements FuncionarioEnderecoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna FuncionarioEndereco baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getFuncionarioEndereco(int $funcionario): ?Model
    {
        return $this->where(['funcionario_id' => $funcionario])->first();
    }

    /**
     * Retorna uma coleção de FuncionarioEndereco baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getFuncionarioEnderecos(int $id, int $associacao): ?Collection
    {
        return $this;
    }

    /**
     * Cria um novo FuncionarioEndereco.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFuncionarioEndereco(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um FuncionarioEndereco.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateFuncionarioEndereco(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um FuncionarioEndereco.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFuncionarioEndereco(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
