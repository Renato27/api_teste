<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\LicencaRepository;

class LicencaRepositoryImplementation implements LicencaRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Licenca baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getLicenca(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Licenca baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getLicencasByTipo(int $tipo): ?Collection
    {
        return $this->where(['tipo_licenca_id' => $tipo])->get();
    }

    /**
     * Cria um novo Licenca.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createLicenca(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Licenca.
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
     * Deleta um Licenca.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteLicenca(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
