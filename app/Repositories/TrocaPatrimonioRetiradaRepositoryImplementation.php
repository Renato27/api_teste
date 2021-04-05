<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\TrocaPatrimonioRetiradaRepository;

class TrocaPatrimonioRetiradaRepositoryImplementation implements TrocaPatrimonioRetiradaRepository
{
    /**
     * Retorna TrocaPatrimonioRetirada baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getTrocaPatrimonioRetirada(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de TrocaPatrimonioRetirada baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTrocaPatrimonioRetiradas(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo TrocaPatrimonioRetirada.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTrocaPatrimonioRetirada(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um TrocaPatrimonioRetirada.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTrocaPatrimonioRetirada(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um TrocaPatrimonioRetirada.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTrocaPatrimonioRetirada(int $id): bool
    {
    }
}
