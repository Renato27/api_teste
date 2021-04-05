<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ContratoMedicaoTipoRepository;

class ContratoMedicaoTipoRepositoryImplementation implements ContratoMedicaoTipoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna ContratoMedicaoTipo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContratoMedicaoTipo(int $contrato): ?Model
    {
        return $this->where(['contrato_id' => $contrato])->first();
    }

    /**
     * Retorna uma coleção de ContratoMedicaoTipo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getMedicaoTipoContratos(int $medicao): ?Collection
    {
        return $this->where(['medicao_tipo_id' => $medicao])->get();
    }

    /**
     * Cria um novo ContratoMedicaoTipo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContratoMedicaoTipo(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ContratoMedicaoTipo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContratoMedicaoTipo(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ContratoMedicaoTipo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContratoMedicaoTipo(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
