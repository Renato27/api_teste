<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

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
    public function setPatrimonio(Patrimonio $Patrimonio): self;

    /**
     * Seta os dados para Patrimonio.
     *
     * @param array $dados
     * @return CadastrarPatrimonioService;
     */
    public function setDados(array $dados): self;

    /**
     * Seta o repositório de PatrimonioRepository.
     *
     * @param PatrimonioRepository $PatrimonioRepository
     * @return CadastrarPatrimonioService
     */
    public function setPatrimonioRepository(PatrimonioRepository $PatrimonioRepository): self;

    /**
     * Processa os dados.
     *
     * @return Patrimonio|null
     */
    public function handle(): ?Patrimonio;
}
