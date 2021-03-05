<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface PatrimonioRepository
{
    /**
     * Retorna Patrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de Patrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonios(): ?Collection;

    /**
     * Cria um novo Patrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um Patrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Patrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePatrimonio(int $id): bool;

    /**
     * Seta um patrimônio como disponível
     *
     * @param Model $model
     * @return boolean
     */
    public function setDisponivel(Model $model): bool;

    /**
     * Seta um patrimônio como disponível
     *
     * @param Model $model
     * @return boolean
     */
    public function setAlugado(Model $model): bool;
}
