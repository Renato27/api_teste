<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface PatrimonioRepository
{
    /**
     * Retorna Patrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de Patrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonios(): ?Collection;

    /**
     * Cria um novo Patrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um Patrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Patrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePatrimonio(int $id): bool;

    /**
     * Seta um patrimônio como disponível.
     *
     * @param Model $model
     * @return bool
     */
    public function setDisponivel(Model $model): bool;

    /**
     * Seta um patrimônio como disponível.
     *
     * @param Model $model
     * @return bool
     */
    public function setAlugado(Model $model): bool;
}
