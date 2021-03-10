<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface NotaPatrimonioRepository
{
    /**
     * Retorna NotaPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getNotaPatrimonio(int $id): ?Model;

    /**
     * Retorna uma coleção de NotaPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getNotaPatrimonios(int $nota): ?Collection;

    /**
     * Cria um novo NotaPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createNotaPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um NotaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateNotaPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um NotaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteNotaPatrimonio(int $id): bool;

    /**
     * Retorna o último faturamento válido de um patrimonio.
     *
     * @param integer $patrimonio
     * @return Model|null
     */
    public function getUltimoFaturamentoValido(int $patrimonio, ?int $cliente = null): ?Model;
}
