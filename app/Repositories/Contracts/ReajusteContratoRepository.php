<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ReajusteContratoRepository
{
    /**
     * Retorna ReajusteContrato baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getReajusteContrato(int $id): ?Model;

    /**
     * Retorna uma coleção de ReajusteContrato baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getReajusteContratos(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo ReajusteContrato
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createReajusteContrato(array $detalhes): ?Model;

    /**
     * Atualiza um ReajusteContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateReajusteContrato(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ReajusteContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteReajusteContrato(int $id): bool;

    /**
     * Retorna os reajustes próximos de vencer.
     *
     * @return Collection|null
     */
    public function reajusteVencimento(): ?Collection;
}
