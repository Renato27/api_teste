<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\TipoContratoRepository;

class TipoContratoRepositoryImplementation implements TipoContratoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna TipoContrato baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getTipoContrato(int $contrato): ?Model
    {
        return $this->where(['contrato_id' => $contrato])->first();
    }

    /**
     * Retorna uma coleção de TipoContrato baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTipoContratos(int $tipo): ?Collection
    {
        return $this->where(['contrato_tipo_id' => $tipo])->get();
    }

    /**
     * Cria um novo TipoContrato.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTipoContrato(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um TipoContrato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTipoContrato(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um TipoContrato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTipoContrato(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
