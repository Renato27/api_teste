<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ClienteVisualizacaoPatrimonioRepository;

class ClienteVisualizacaoPatrimonioRepositoryImplementation implements ClienteVisualizacaoPatrimonioRepository
{
    /**
     * Retorna ClienteVisualizacaoPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getClienteVisualizacaoPatrimonio(int $id): ?Model
    {
    }

    /**
     * Retorna uma coleção de ClienteVisualizacaoPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getClienteVisualizacaoPatrimonios(int $id, int $associacao): ?Collection
    {
    }

    /**
     * Cria um novo ClienteVisualizacaoPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createClienteVisualizacaoPatrimonio(array $detalhes): ?Model
    {
    }

    /**
     * Atualiza um ClienteVisualizacaoPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateClienteVisualizacaoPatrimonio(int $id, array $detalhes): ?Model
    {
    }

    /**
     * Deleta um ClienteVisualizacaoPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteClienteVisualizacaoPatrimonio(int $id): bool
    {
    }
}
