<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface EspelhoRecorrentePatrimonioRepository
{
    /**
     * Retorna EspelhoRecorrentePatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getEspelhoRecorrentePatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de EspelhoRecorrentePatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getEspelhoRecorrentePatrimonios(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo EspelhoRecorrentePatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEspelhoRecorrentePatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um EspelhoRecorrentePatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEspelhoRecorrentePatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um EspelhoRecorrentePatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEspelhoRecorrentePatrimonio(int $id): bool;

    /**
     * Retorna os patrimônios de um espelho recorrente.
     *
     * @param int $espelho_recorrente_id
     * @return Collection|null
     */
    public function getPatrimoniosByEspelhoRecorrente(int $espelho_recorrente_id): ?Collection;
}
