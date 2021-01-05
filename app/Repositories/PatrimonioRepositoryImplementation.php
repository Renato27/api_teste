<?php

namespace App\Repositories;

use App\Repositories\Contracts\PatrimonioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PatrimonioRepositoryImplementation implements PatrimonioRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Patrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPatrimonio(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Patrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonios(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Cria um novo Patrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPatrimonio(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Patrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePatrimonio(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Patrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePatrimonio(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
