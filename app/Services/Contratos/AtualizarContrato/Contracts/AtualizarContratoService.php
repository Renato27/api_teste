<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Contratos\AtualizarContrato\Contracts;

use App\Models\Contratos\Contrato;
use App\Repositories\Contracts\ContratosRepository;

interface AtualizarContratoService
{
    /**
     * Seta um contrato a ser atualizado.
     *
     * @param int $contrato
     * @return AtualizarContratoService
     */
    public function setContrato(int $contrato) : self;

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarContratoService
     */
    public function setDados(array $dados) : self;

    /**
     * Seta o repositório de contrato.
     *
     * @param ContratosRepository $contratoRepository
     * @return AtualizarContratoService
     */
    public function setContratoRepository(ContratosRepository $contratoRepository) : self;

    /**
     * Processa a atualização do contrato.
     *
     * @return Contrato|null
     */
    public function handle() : ?Contrato;
}
