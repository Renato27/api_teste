<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface RetiradaPatrimonioRepository
{
    /**
     * Retorna RetiradaPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getRetiradaPatrimonio(int $retirada): ?Model;

    /**
     * Retorna uma coleção de RetiradaPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getRetiradaPatrimonios(int $patrimonio): ?Collection;

    /**
     * Cria um novo RetiradaPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createRetiradaPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um RetiradaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateRetiradaPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um RetiradaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteRetiradaPatrimonio(int $id): bool;

    /**
     * Seta os patrimônios da retirada como alugado e exclui da tabela.
     *
     * @param integer $retirada
     * @return boolean|null
     */
    public function setPatrimonioRetiradaAlugado(int $retirada) : ?bool;

    /**
     * Seta os patrimônios da retirada como disponível e exclui da tabela.
     *
     * @param integer $entrega
     * @return boolean|null
     */
    public function setPatrimonioRetiradaDisponivel(int $retirada) : ?bool;
}
