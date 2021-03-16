<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Entrega\CadastrarEntrega\Base;

use App\Models\Entrega\Entrega;
use App\Models\Expedicao\Expedicao;
use App\Repositories\Contracts\EntregaRepository;
use App\Services\Entrega\CadastrarEntrega\Contracts\CadastrarEntregaService;

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
     * Array de patrimônios.
     *
     * @var array
     */
    protected array $patrimonios;

    /**
     * ID do item do pedido.
     *
     * @var int
     */
    protected int $item_pedido;

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

    /**
     * Seta o item de um pedido.
     *
     * @param array $item_pedido
     * @return CadastrarEntregaService
     */
    public function setItemPedido(int $item_pedido) : CadastrarEntregaService
    {
        $this->item_pedido = $item_pedido;

        return $this;
    }
}
