<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface EspelhoRecorrentePatrimonioRepository
{
    /**
     * Retorna EspelhoRecorrentePatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEspelhoRecorrentePatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de EspelhoRecorrentePatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEspelhoRecorrentePatrimonios(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo EspelhoRecorrentePatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEspelhoRecorrentePatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um EspelhoRecorrentePatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEspelhoRecorrentePatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um EspelhoRecorrentePatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEspelhoRecorrentePatrimonio(int $id): bool;

    /**
     * Retorna os patrimônios de um espelho recorrente.
     *
     * @param integer $espelho_recorrente_id
     * @return Collection|null
     */
    public function getPatrimoniosByEspelhoRecorrente(int $espelho_recorrente_id): ?Collection;
}
