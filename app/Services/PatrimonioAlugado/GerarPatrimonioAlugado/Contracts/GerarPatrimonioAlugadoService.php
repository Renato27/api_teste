<?php

namespace App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Contracts;

use App\Models\Chamado\Chamado;
use App\Models\EntregaPatrimonio\EntregaPatrimonio;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Repositories\Contracts\PatrimonioAlugadoRepository;

interface GerarPatrimonioAlugadoService
{
    /**
     * Seta a model de PatrimonioAlugado.
     *
     * @param PatrimonioAlugado|null
     * @return GerarPatrimonioAlugadoService
     */
    public function setEntregaPatrimonio(?EntregaPatrimonio $entregaPatrimonio = null): GerarPatrimonioAlugadoService;

    /**
     * Seta os dados para PatrimonioAlugado.
     *
     * @param array|null $dados
     * @return GerarPatrimonioAlugadoService;
     */
    public function setDados(?array $dados = null): GerarPatrimonioAlugadoService;

    /**
     * Seta a model de chamado.
     *
     * @param Chamado|null $chamado
     * @return GerarPatrimonioAlugadoService
     */
    public function setChamado(?Chamado $chamado = null): GerarPatrimonioAlugadoService;

    /**
     * Seta o repositório de PatrimonioAlugadoRepository.
     *
     * @param PatrimonioAlugadoRepository $PatrimonioAlugadoRepository
     * @return GerarPatrimonioAlugadoService
     */
    public function setPatrimonioAlugadoRepository(PatrimonioAlugadoRepository $PatrimonioAlugadoRepository): GerarPatrimonioAlugadoService;

    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): bool;
}
