<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface EntregaPatrimonioRepository
{
    /**
     * Retorna EntregaPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEntregaPatrimonio(int $entrega, int $patrimonio): ?Model;

    /**
     * Retorna uma coleção de EntregaPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEntregaPatrimonios(int $entrega): ?Collection;

    /**
     * Retorna todos os patrimônios checados.
     *
     * @param integer $entrega
     * @return Collection|null
     */
    public function getPatrimoniosChecked(int $entrega) : ?Collection;

    /**
     * Seta os patrimôniosda entrega como disponível e exclui da tabela.
     *
     * @param integer $entrega
     * @return boolean|null
     */
    public function setPatrimonioEntregaDisponivel(int $entrega) : ?bool;

    /**
     * Verifica se todos os patrimônios da entrega foram checados.
     *
     * @param integer $entrega
     * @return boolean
     */
    public function verififyIfAllPatrimoniosChecked(int $entrega) : bool;

    /**
     * Cria um novo EntregaPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEntregaPatrimonio(array $detalhes): ?Model;

    /**
     * Atualiza um EntregaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEntregaPatrimonio(int $id, array $detalhes): ?Model;

    /**
     * Deleta um EntregaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEntregaPatrimonio(int $id): bool;
}
