<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use Carbon\CarbonImmutable;
use App\Models\Contratos\Contrato;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface ContratosRepository
{
    /**
     * Retorna Contratos baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContrato(int $id): ?Model;

    /**
     * Retorna uma coleção de Contratos baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContratos(): ?Collection;

    /**
     * Cria um novo Contratos.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContrato(array $detalhes): ?Model;

    /**
     * Atualiza um Contratos.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContrato(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Contratos.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContrato(int $id): bool;

    /**
     * Retorna os contrato de medição do dia.
     *
     * @return Collection
     */
    public function getContratosDoDia(?CarbonImmutable $dia = null, ?int $contrato = null) : Collection;

    /**
     * Verifica qual periodo início será utilizado na nota.
     *
     * @param int $contrato
     * @return array
     */
    public function verificaPeriodoPorContrato(Contrato $contrato, string $emissao = null) : array;

     /**
     * Retorna todos os contratos á vencer.
     *
     * @return Collection|null
     */
    public function getContratosAVencer(): ?Collection;
}
