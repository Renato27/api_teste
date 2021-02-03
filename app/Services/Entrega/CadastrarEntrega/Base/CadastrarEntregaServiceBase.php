<?php

namespace App\Services\Entrega\CadastrarEntrega\Base;

use App\Services\Entrega\CadastrarEntrega\Contracts\CadastrarEntregaService;
use App\Models\Entrega\Entrega;
use App\Models\Expedicao\Expedicao;
use App\Repositories\Contracts\EntregaRepository;

abstract class CadastrarEntregaServiceBase implements CadastrarEntregaService
{
    /**
     * Model de Entrega.
     *
     * @var Expedicao
     */
    protected Expedicao $expedicao;

    /**
     * Repositório de EntregaRepository.
     *
     * @var EntregaRepository
     */
    protected EntregaRepository $EntregaRepository;

    /**
     * Array de patrimônios
     *
     * @var array
     */
    protected array $patrimonios;

   /**
     * Seta a model de Entrega.
     *
     * @param Expedicao
     * @return CadastrarEntregaService
     */
    public function setExpedicao(Expedicao $expedicao): CadastrarEntregaService
    {
        $this->expedicao = $expedicao;
        return $this;
    }

    /**
     * Seta o repositório de EntregaRepository.
     *
     * @param EntregaRepository $EntregaRepository
     * @return CadastrarEntregaService
     */
    public function setEntregaRepository(EntregaRepository $EntregaRepository): CadastrarEntregaService
    {
        $this->EntregaRepository = $EntregaRepository;
        return $this;
    }

    /**
     * Seta os patrimônios da entrega.
     *
     * @param array $patrimonios
     * @return CadastrarEntregaService
     */
    public function setPatrimonios(array $patrimonios): CadastrarEntregaService
    {
        $this->patrimonios = $patrimonios;
        return $this;
    }
}
