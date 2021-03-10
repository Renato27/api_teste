<?php

namespace App\Repositories;

use App\Repositories\Contracts\EspelhoRecorrentePatrimonioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EspelhoRecorrentePatrimonioRepositoryImplementation implements EspelhoRecorrentePatrimonioRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna EspelhoRecorrentePatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEspelhoRecorrentePatrimonio(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de EspelhoRecorrentePatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEspelhoRecorrentePatrimonios(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo EspelhoRecorrentePatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEspelhoRecorrentePatrimonio(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um EspelhoRecorrentePatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEspelhoRecorrentePatrimonio(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um EspelhoRecorrentePatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEspelhoRecorrentePatrimonio(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }

    /**
     * Retorna os patrimônios de um espelho recorrente.
     *
     * @param integer $espelho_recorrente_id
     * @return Collection|null
     */
    public function getPatrimoniosByEspelhoRecorrente(int $espelho_recorrente_id): ?Collection
    {
        return $this->where(['espelho_recorrente_id' => $espelho_recorrente_id])->get();
    }
}
