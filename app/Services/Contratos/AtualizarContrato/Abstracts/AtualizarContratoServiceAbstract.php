<?php

namespace App\Services\Contratos\AtualizarContrato\Abstracts;

use App\Models\Contratos\Contrato;
use App\Repositories\Contracts\ContratosRepository;
use App\Services\Contratos\AtualizarContrato\Contracts\AtualizarContratoService;
use Exception;

abstract class AtualizarContratoServiceAbstract implements AtualizarContratoService
{

    /**
     * Dados a serem atualizados.
     *
     * @var array
     */
    protected array $dados;

    /**
     * ID do contrato.
     *
     * @var integer
     */
    protected int $contrato;

    /**
     * Repositório de contrato.
     *
     * @var ContratoRepository
     */
    protected ContratosRepository $contratoRepository;

     /**
     * Seta um contrato a ser atualizado.
     *
     * @param integer $contrato
     * @return AtualizarContratoService
     */
    public function setContrato(int $contrato) : AtualizarContratoService
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarContratoService
     */
    public function setDados(array $dados) : AtualizarContratoService
    {
        $this->dados = $dados;

        return $this;
    }

    /**
     * Seta o repositório de contrato.
     *
     * @param ContratoRepository $contratoRepository
     * @return AtualizarContratoService
     */
    public function setContratoRepository(ContratosRepository $contratoRepository) : AtualizarContratoService
    {
        $this->contratoRepository = $contratoRepository;

        return $this;
    }

    /**
     * Processa os dados para atualizar um contrato.
     *
     * @return Contrato
     */
    protected function atualizarContrato() : Contrato
    {
        $contrato = $this->contratoRepository->getContrato($this->contrato);

        if(!isset($contrato->id))
            throw new Exception("O contrato solicitado para atualização não existe");

        $contratoAtualizado = $this->contratoRepository->updateContrato($contrato->id, $this->dados);

        if(!isset($contratoAtualizado->id))
            throw new Exception("Não foi possivel atualizar o contrato solicitado. Revise os dados e tente novamente");

        return $contratoAtualizado;
    }
}
