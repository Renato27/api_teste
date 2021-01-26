<?php

namespace App\Services\Patrimonios\teste17Patrimonio\Contracts;

use App\Models\Patrimonio\Patrimonio;
use App\Repositories\Contracts\PatrimonioRepository;

interface teste17PatrimonioService
{
    /**
     * Seta a model de Patrimonio.
     *
     * @param Patrimonio
     * @return teste17PatrimonioService
     */
    public function setPatrimonio(Patrimonio $Patrimonio): teste17PatrimonioService;

    /**
     * Seta o repositório de PatrimonioRepository.
     *
     * @param PatrimonioRepository $PatrimonioRepository
     * @return teste17PatrimonioService
     */
    public function setPatrimonioRepository(PatrimonioRepository $PatrimonioRepository): teste17PatrimonioService;

    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): bool;
}
