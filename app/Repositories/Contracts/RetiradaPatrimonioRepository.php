<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface RetiradaPatrimonioRepository
{
    /**
     * Retorna RetiradaPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getRetiradaPatrimonio(int $retirada): ?Model;

    /**
     * Retorna uma coleção de RetiradaPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getRetiradaPatrimonios(int $patrimonio): ?Collection;

    /**
     * Cria um novo RetiradaPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createRetiradaPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um RetiradaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateRetiradaPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um RetiradaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteRetiradaPatrimonio(int $id): bool;

    /**
     * Seta os patrimônios da retirada como alugado e exclui da tabela.
     *
     * @param int $retirada
     * @return bool|null
     */
    public function setPatrimonioRetiradaAlugado(int $retirada) : ?bool;

    /**
     * Seta os patrimônios da retirada como disponível e exclui da tabela.
     *
     * @param int $entrega
     * @return bool|null
     */
    public function setPatrimonioRetiradaDisponivel(int $retirada) : ?bool;
}
