<?php

namespace App\Repositories;

use App\Repositories\Contracts\LicencaRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class LicencaRepositoryImplementation implements LicencaRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Licenca baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getLicenca(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Licenca baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getLicencasByTipo(int $tipo): ?Collection
    {
        return $this->where(['tipo_licenca_id' => $tipo])->get();
    }

    /**
     * Cria um novo Licenca
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createLicenca(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Licenca
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateLicenca(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Licenca
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteLicenca(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
