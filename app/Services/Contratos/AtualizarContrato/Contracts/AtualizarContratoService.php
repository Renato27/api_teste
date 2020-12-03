<?php

namespace App\Services\Contratos\AtualizarContrato\Contracts;

use App\Models\Contratos\Contrato;
use App\Repositories\Contracts\ContratosRepository;

interface AtualizarContratoService
{
    /**
     * Seta um contrato a ser atualizado.
     *
     * @param integer $contrato
     * @return AtualizarContratoService
     */
    public function setContrato(int $contrato) : AtualizarContratoService;

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarContratoService
     */
    public function setDados(array $dados) : AtualizarContratoService;

    /**
     * Seta o repositório de contrato.
     *
     * @param ContratosRepository $contratoRepository
     * @return AtualizarContratoService
     */
    public function setContratoRepository(ContratosRepository $contratoRepository) : AtualizarContratoService;

    /**
     * Processa a atualização do contrato.
     *
     * @return Contrato|null
     */
    public function handle() : ?Contrato;
}
