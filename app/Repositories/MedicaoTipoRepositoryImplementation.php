<?php

namespace App\Repositories;

use App\Repositories\Contracts\MedicaoTipoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class MedicaoTipoRepositoryImplementation implements MedicaoTipoRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna MedicaoTipo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getMedicaoTipo(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de MedicaoTipo baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getMedicaoTipos(int $id, int $associacao): ?Collection
    {
        return $this;
    }

    /**
     * Cria um novo MedicaoTipo
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createMedicaoTipo(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um MedicaoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateMedicaoTipo(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um MedicaoTipo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteMedicaoTipo(int $id): bool
    {
        $retorno = $this->delete($id);

        if($retorno) return false;

        return true;
    }
}