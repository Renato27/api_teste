<?php

namespace App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Base;

use App\Models\Chamado\Chamado;
use App\Models\EntregaPatrimonio\EntregaPatrimonio;
use App\Models\Patrimonio\Patrimonio;
use App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Contracts\GerarPatrimonioAlugadoService;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Repositories\Contracts\PatrimonioAlugadoRepository;

abstract class GerarPatrimonioAlugadoServiceBase implements GerarPatrimonioAlugadoService
{
    /**
     * Model de EntregaPatrimonio.
     *
     * @var EntregaPatrimonio|null
     */
    protected ?EntregaPatrimonio $entregaPatrimonio;

    /**
     * Array de dados.
     *
     * @var array|null
     */
    protected ?array $dados;

    /**
     * Chamado
     *
     * @var Chamado|null
     */
    protected ?Chamado $chamado;

    /**
     * Repositório de PatrimonioAlugadoRepository.
     *
     * @var PatrimonioAlugado
     */
    protected PatrimonioAlugadoRepository $PatrimonioAlugadoRepository;

   /**
     * Seta a model de PatrimonioAlugado.
     *
     * @param EntregaPatrimonio|null
     * @return GerarPatrimonioAlugadoService
     */
    public function setEntregaPatrimonio(?EntregaPatrimonio $entregaPatrimonio = null): GerarPatrimonioAlugadoService
    {
        $this->entregaPatrimonio = $entregaPatrimonio;
        return $this;
    }

    /**
     * Seta os dados para PatrimonioAlugado.
     *
     * @param array|null $dados
     * @return GerarPatrimonioAlugadoService;
     */
    public function setDados(?array $dados = null): GerarPatrimonioAlugadoService
    {
        $this->dados = $dados;
        return $this;
    }

    /**
     * Seta a model de chamado.
     *
     * @param Chamado|null $chamado
     * @return GerarPatrimonioAlugadoService
     */
    public function setChamado(?Chamado $chamado = null): GerarPatrimonioAlugadoService
    {
        $this->chamado = $chamado;
        return $this;
    }

    /**
     * Seta o repositório de PatrimonioAlugadoRepository.
     *
     * @param PatrimonioAlugadoRepository $PatrimonioAlugadoRepository
     * @return GerarPatrimonioAlugadoService
     */
    public function setPatrimonioAlugadoRepository(PatrimonioAlugadoRepository $PatrimonioAlugadoRepository): GerarPatrimonioAlugadoService
    {
        $this->PatrimonioAlugadoRepository = $PatrimonioAlugadoRepository;
        return $this;
    }
}
