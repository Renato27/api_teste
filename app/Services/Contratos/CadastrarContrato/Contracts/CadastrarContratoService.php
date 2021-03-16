<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

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
    public function setDados(array $dados) : self;

    /**
     * Seta o repositório de contrato.
     *
     * @param ContratoRepository $contatoRepository
     * @return CadastrarContratoService
     */
    public function setContratoRepository(ContratosRepository $contratoRepository) : self;

    /**
     * Processa os dados para cadastrar um contrato.
     *
     * @return Contrato
     */
    public function handle() : ?Contrato;
}
