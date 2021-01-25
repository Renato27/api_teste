<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface EntregaPatrimonioRepository
{
    /**
     * Retorna EntregaPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEntregaPatrimonio(int $entrega): ?Model;

    /**
     * Retorna uma coleção de EntregaPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEntregaPatrimonios(int $patrimonio): ?Collection;

    /**
     * Cria um novo EntregaPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEntregaPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um EntregaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEntregaPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um EntregaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEntregaPatrimonio(int $id): bool;
}
