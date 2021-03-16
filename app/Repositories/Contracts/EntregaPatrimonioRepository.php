<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface EntregaPatrimonioRepository
{
    /**
     * Retorna EntregaPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getEntregaPatrimonio(int $entrega, int $patrimonio): ?Model;

    /**
     * Retorna uma coleção de EntregaPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getEntregaPatrimonios(int $entrega): ?Collection;

    /**
     * Retorna todos os patrimônios checados.
     *
     * @param int $entrega
     * @return Collection|null
     */
    public function getPatrimoniosChecked(int $entrega) : ?Collection;

    /**
     * Seta os patrimôniosda entrega como disponível e exclui da tabela.
     *
     * @param int $entrega
     * @return bool|null
     */
    public function setPatrimonioEntregaDisponivel(int $entrega) : ?bool;

    /**
     * Seta os patrimôniosda entrega como alugado e exclui da tabela.
     *
     * @param int $entrega
     * @return bool|null
     */
    public function setPatrimonioEntregaAlugado(int $entrega) : ?bool;

    /**
     * Verifica se todos os patrimônios da entrega foram checados.
     *
     * @param int $entrega
     * @return bool
     */
    public function verififyIfAllPatrimoniosChecked(int $entrega) : bool;

    /**
     * Cria um novo EntregaPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEntregaPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um EntregaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEntregaPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um EntregaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEntregaPatrimonio(int $id): bool;
}
