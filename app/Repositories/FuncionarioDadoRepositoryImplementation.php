<?php

namespace App\Repositories;

use App\Repositories\Contracts\FuncionarioDadoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class FuncionarioDadoRepositoryImplementation implements FuncionarioDadoRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna FuncionarioDado baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getFuncionarioDado(int $funcionario): ?Model
    {
        return $this->where(['funcionario_id' => $funcionario])->first();
    }

    /**
     * Retorna uma coleção de FuncionarioDado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getFuncionarioDados(int $id, int $associacao): ?Collection
    {
        return $this;
    }

    /**
     * Cria um novo FuncionarioDado
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createFuncionarioDado(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um FuncionarioDado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateFuncionarioDado(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um FuncionarioDado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteFuncionarioDado(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}