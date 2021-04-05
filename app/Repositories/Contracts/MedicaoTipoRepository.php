<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface MedicaoTipoRepository
{
    /**
     * Retorna MedicaoTipo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getMedicaoTipo(int $id): ?Model;

    /**
     * Retorna uma coleção de MedicaoTipo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getMedicaoTipos(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo MedicaoTipo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createMedicaoTipo(array $detalhes): ?Model;

    /**
     * Atualiza um MedicaoTipo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateMedicaoTipo(int $id, array $detalhes): ?Model;

    /**
     * Deleta um MedicaoTipo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteMedicaoTipo(int $id): bool;
}
