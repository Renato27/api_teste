<?php

namespace App\Services\Patrimonios\teste17Patrimonio\Base;

use App\Services\Patrimonios\teste17Patrimonio\Contracts\teste17PatrimonioService;
use App\Models\Patrimonio\Patrimonio;
use App\Repositories\Contracts\PatrimonioRepository;

abstract class teste17PatrimonioServiceBase implements teste17PatrimonioService
{
    /**
     * Model de Patrimonio.
     *
     * @var Patrimonio
     */
    protected Patrimonio $Patrimonio;

    /**
     * Repositório de PatrimonioRepository.
     *
     * @var Patrimonio
     */
    protected PatrimonioRepository $PatrimonioRepository;

   /**
     * Seta a model de Patrimonio.
     *
     * @param Patrimonio
     * @return teste17PatrimonioService
     */
    public function setPatrimonio(Patrimonio $Patrimonio): teste17PatrimonioService
    {
        $this->Patrimonio = $Patrimonio;
        return $this;
    }

    /**
     * Seta o repositório de PatrimonioRepository.
     *
     * @param PatrimonioRepository $PatrimonioRepository
     * @return teste17PatrimonioService
     */
    public function setPatrimonioRepository(PatrimonioRepository $PatrimonioRepository): teste17PatrimonioService
    {
        $this->PatrimonioRepository = $PatrimonioRepository;
        return $this;
    }
}
