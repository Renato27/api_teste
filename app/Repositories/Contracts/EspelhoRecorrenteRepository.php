<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface EspelhoRecorrenteRepository
{
    /**
     * Retorna EspelhoRecorrente baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getEspelhoRecorrente(int $id): ?Model;

    /**
     * Retorna uma coleção de EspelhoRecorrente baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getEspelhoRecorrentes(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo EspelhoRecorrente.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEspelhoRecorrente(array $detalhes): ?Model;

    /**
     * Atualiza um EspelhoRecorrente.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEspelhoRecorrente(int $id, array $detalhes): ?Model;

    /**
     * Deleta um EspelhoRecorrente.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEspelhoRecorrente(int $id): bool;

    /**
     * Retorna os espelhos recorrentes do dia.
     *
     * @return Collection
     */
    public function getEspelhoRecorrenteDia() : Collection;
}
