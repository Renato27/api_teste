<?php

namespace App\Services\Patrimonio\CadastrarPatrimonio\Base;

use App\Services\Patrimonio\CadastrarPatrimonio\Contracts\CadastrarPatrimonioService;
use App\Models\Patrimonio\Patrimonio;
use App\Repositories\Contracts\PatrimonioRepository;

abstract class CadastrarPatrimonioServiceBase implements CadastrarPatrimonioService
{
    /**
     * Model de Patrimonio.
     *
     * @var Patrimonio
     */
    protected Patrimonio $Patrimonio;

    /**
     * Array de dados.
     *
     * @var array
     */
    protected array $dados;

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
     * @return CadastrarPatrimonioService
     */
    public function setPatrimonio(Patrimonio $Patrimonio): CadastrarPatrimonioService
    {
        $this->Patrimonio = $Patrimonio;
        return $this;
    }

    /**
     * Seta os dados para Patrimonio.
     *
     * @param array $dados
     * @return CadastrarPatrimonioService;
     */
    public function setDados(array $dados): CadastrarPatrimonioService
    {
        $this->dados = $dados;
        return $this;
    }

    /**
     * Seta o repositório de PatrimonioRepository.
     *
     * @param PatrimonioRepository $PatrimonioRepository
     * @return CadastrarPatrimonioService
     */
    public function setPatrimonioRepository(PatrimonioRepository $PatrimonioRepository): CadastrarPatrimonioService
    {
        $this->PatrimonioRepository = $PatrimonioRepository;
        return $this;
    }
}
