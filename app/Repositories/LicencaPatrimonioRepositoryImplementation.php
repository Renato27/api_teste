<?php

namespace App\Repositories;

use App\Repositories\Contracts\LicencaPatrimonioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class LicencaPatrimonioRepositoryImplementation implements LicencaPatrimonioRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna LicencaPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getLicencaPatrimonio(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de LicencaPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getLicencaPatrimonios(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo LicencaPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createLicencaPatrimonio(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um LicencaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateLicencaPatrimonio(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um LicencaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteLicencaPatrimonio(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
