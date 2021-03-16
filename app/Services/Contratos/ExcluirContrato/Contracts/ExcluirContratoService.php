<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Contratos\ExcluirContrato\Contracts;

use App\Repositories\Contracts\ContratosRepository;

interface ExcluirContratoService
{
    /**
     * Seta o contrato a ser excluído.
     *
     * @param int $contrato
     * @return ExcluirContratoService
     */
    public function setContrato(int $contrato) : self;

    /**
     * Seta o repositório de contrato.
     *
     * @param ContratoRepository $contratoRepository
     * @return ExcluirContratoService
     */
    public function setContratoRepository(ContratosRepository $contratoRepository) : self;

    /**
     * Processa a exclusão do contrato.
     *
     * @return bool
     */
    public function handle() : bool;
}
