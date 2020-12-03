<?php

namespace App\Services\Contratos\ExcluirContrato\Contracts;

use App\Repositories\Contracts\ContratosRepository;

interface ExcluirContratoService
{
    /**
     * Seta o contrato a ser excluído.
     *
     * @param integer $contrato
     * @return ExcluirContratoService
     */
    public function setContrato(int $contrato) : ExcluirContratoService;

    /**
     * Seta o repositório de contrato.
     *
     * @param ContratoRepository $contratoRepository
     * @return ExcluirContratoService
     */
    public function setContratoRepository(ContratosRepository $contratoRepository) : ExcluirContratoService;

    /**
     * Processa a exclusão do contrato.
     *
     * @return boolean
     */
    public function handle() : bool;
}
