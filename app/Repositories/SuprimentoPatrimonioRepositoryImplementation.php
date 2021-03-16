<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\SuprimentoPatrimonioRepository;

class SuprimentoPatrimonioRepositoryImplementation implements SuprimentoPatrimonioRepository
{
    /**
     * Retorna SuprimentoPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getSuprimentoPatrimonio(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de SuprimentoPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getSuprimentoPatrimonios(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo SuprimentoPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createSuprimentoPatrimonio(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um SuprimentoPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateSuprimentoPatrimonio(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um SuprimentoPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteSuprimentoPatrimonio(int $id): bool
    {
    }
}
