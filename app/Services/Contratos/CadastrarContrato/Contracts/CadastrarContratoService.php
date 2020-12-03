<?php

namespace App\Services\Contratos\CadastrarContrato\Contracts;

use App\Models\Contratos\Contrato;
use App\Repositories\Contracts\ContratosRepository;

interface CadastrarContratoService
{
        /**
     * Seta os dados para cadastrar um contrato.
     *
     * @param array $dados
     * @return CadastrarContratoService
     */
    public function setDados(array $dados) : CadastrarContratoService;

    /**
     * Seta o repositório de contrato.
     *
     * @param ContratoRepository $contatoRepository
     * @return CadastrarContratoService
     */
    public function setContratoRepository(ContratosRepository $contratoRepository) : CadastrarContratoService;

    /**
     * Processa os dados para cadastrar um contrato.
     *
     * @return Contrato
     */
    public function handle() : ?Contrato;
}
