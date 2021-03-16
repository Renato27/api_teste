<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ContratoMedicaoTipoRepository
{
    /**
     * Retorna ContratoMedicaoTipo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContratoMedicaoTipo(int $contrato): ?Model;

    /**
     * Retorna uma coleção de ContratoMedicaoTipo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getMedicaoTipoContratos(int $medicao): ?Collection;

    /**
     * Cria um novo ContratoMedicaoTipo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContratoMedicaoTipo(array $detalhes): ?Model;

    /**
     * Atualiza um ContratoMedicaoTipo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContratoMedicaoTipo(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ContratoMedicaoTipo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContratoMedicaoTipo(int $id): bool;
}
