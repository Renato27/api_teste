<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface NotaEspelhoRepository
{
    /**
     * Retorna NotaEspelho baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getNotaEspelho(int $id): ?Model;

    /**
     * Retorna uma coleção de NotaEspelho baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getNotaEspelhos(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo NotaEspelho.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createNotaEspelho(array $detalhes): ?Model;

    /**
     * Atualiza um NotaEspelho.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateNotaEspelho(int $id, array $detalhes): ?Model;

    /**
     * Deleta um NotaEspelho.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteNotaEspelho(int $id): bool;

    /**
     * Verifica se uma nota espelho está disponivel para ser reemitida.
     *
     * @param int $valorDeBusca
     * @param bool $medicao
     * @return bool
     */
    public function ultimoEspelhoTemMaisDe30Dias(int $valorDeBusca, ?bool $medicao = false, ?bool $recorrencia = false, ?bool $provisionamento = false): bool;
}
