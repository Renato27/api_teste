<?php

namespace App\Repositories;

use App\Repositories\Contracts\FuncionarioEnderecoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class FuncionarioEnderecoRepositoryImplementation implements FuncionarioEnderecoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna FuncionarioEndereco baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getFuncionarioEndereco(int $funcionario): ?Model
    {
        return $this->where(['funcionario_id' => $funcionario])->first();
    }

    /**
     * Retorna uma coleção de FuncionarioEndereco baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getFuncionarioEnderecos(int $id, int $associacao): ?Collection
    {   
        return $this;
    }

    /**
     * Cria um novo FuncionarioEndereco
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createFuncionarioEndereco(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um FuncionarioEndereco
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
     * Deleta um FuncionarioEndereco
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteFuncionarioEndereco(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}