<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Contratos\ExcluirContrato\Abstracts;

use Exception;
use App\Repositories\Contracts\ContratosRepository;
use App\Services\Contratos\ExcluirContrato\Contracts\ExcluirContratoService;

abstract class ExcluirContratoServiceAbstract implements ExcluirContratoService
{
    /**
     * ID do contrato.
     *
     * @var int
     */
    protected int $contrato;

    /**
     * Repositório de contrato.
     *
     * @var ContratoRepository
     */
    protected ContratosRepository $contratoRepository;

    /**
     * Seta o contrato a ser excluído.
     *
     * @param int $contrato
     * @return ExcluirContratoService
     */
    public function setContrato(int $contrato) : ExcluirContratoService
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Seta o repositório de contrato.
     *
     * @param ContratoRepository $contratoRepository
     * @return ExcluirContratoService
     */
    public function setContratoRepository(ContratosRepository $contratoRepository) : ExcluirContratoService
    {
        $this->contratoRepository = $contratoRepository;

        return $this;
    }

    protected function excluirContrato() : bool
    {
        $contrato = $this->contratoRepository->getContrato($this->contrato);

        if (! isset($contrato->id)) {
            throw new Exception('O contrato a ser excluído não existe.');
        }

        $contratoExcluído = $this->contratoRepository->deleteContrato($contrato->id);

        if (! $contratoExcluído) {
            throw new Exception('Não foi possivel excluir o contrato solicitado.');
        }

        return $contratoExcluído;
    }
}
