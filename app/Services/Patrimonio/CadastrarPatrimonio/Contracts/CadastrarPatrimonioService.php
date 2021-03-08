<?php

namespace App\Services\Patrimonio\CadastrarPatrimonio\Contracts;

use App\Models\Patrimonio\Patrimonio;
use App\Repositories\Contracts\PatrimonioRepository;

interface CadastrarPatrimonioService
{
    /**
     * Seta a model de Patrimonio.
     *
     * @param Patrimonio
     * @return CadastrarPatrimonioService
     */
    public function setPatrimonio(Patrimonio $Patrimonio): CadastrarPatrimonioService;

    /**
     * Seta os dados para Patrimonio.
     *
     * @param array $dados
     * @return CadastrarPatrimonioService;
     */
    public function setDados(array $dados): CadastrarPatrimonioService;

    /**
     * Seta o repositório de PatrimonioRepository.
     *
     * @param PatrimonioRepository $PatrimonioRepository
     * @return CadastrarPatrimonioService
     */
    public function setPatrimonioRepository(PatrimonioRepository $PatrimonioRepository): CadastrarPatrimonioService;

    /**
     * Processa os dados
     *
     * @return Patrimonio|null
     */
    public function handle(): ?Patrimonio;
}
