<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ChamadoArquivoRepository
{
    /**
     * Retorna ChamadoArquivo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getArquivosByChamado(int $chamado): ?Collection;

    /**
     * Retorna ChamadoArquivo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getArquivosByUsuario(int $usuario): ?Collection;

    /**
     * Cria um novo ChamadoArquivo
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createChamadoArquivo(array $detalhes): ?Model;

    /**
     * Atualiza um ChamadoArquivo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateChamadoArquivo(int $id, array $detalhes): ?Model;

    /**
     * Deleta um ChamadoArquivo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteChamadoArquivo(int $id): bool;
}
