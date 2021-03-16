<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\LicencaPatrimonioRepository;

class LicencaPatrimonioRepositoryImplementation implements LicencaPatrimonioRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna LicencaPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getLicencaPatrimonio(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de LicencaPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getLicencaPatrimonios(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo LicencaPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createLicencaPatrimonio(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um LicencaPatrimonio.
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
     * Deleta um LicencaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteLicencaPatrimonio(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
