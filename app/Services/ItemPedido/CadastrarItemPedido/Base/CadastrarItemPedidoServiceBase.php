<?php

namespace App\Services\ItemPedido\CadastrarItemPedido\Base;

use App\Services\ItemPedido\CadastrarItemPedido\Contracts\CadastrarItemPedidoService;
use App\Models\ItemPedido\ItemPedido;
use App\Repositories\Contracts\ItemPedidoRepository;

abstract class CadastrarItemPedidoServiceBase implements CadastrarItemPedidoService
{
    /**
     * Model de ItemPedido.
     *
     * @var ItemPedido
     */
    protected ?ItemPedido $ItemPedido;

    /**
     * Undocumented variable
     *
     * @var array
     */
    protected array $dados;

    /**
     * Repositório de ItemPedidoRepository.
     *
     * @var ItemPedido
     */
    protected ItemPedidoRepository $ItemPedidoRepository;

   /**
     * Seta a model de ItemPedido.
     *
     * @param ItemPedido
     * @return CadastrarItemPedidoService
     */
    public function setItemPedido(?ItemPedido $ItemPedido): CadastrarItemPedidoService
    {
        $this->ItemPedido = $ItemPedido;
        return $this;
    }

    /**
     * Seta o repositório de ItemPedidoRepository.
     *
     * @param ItemPedidoRepository $ItemPedidoRepository
     * @return CadastrarItemPedidoService
     */
    public function setItemPedidoRepository(ItemPedidoRepository $ItemPedidoRepository): CadastrarItemPedidoService
    {
        $this->ItemPedidoRepository = $ItemPedidoRepository;
        return $this;
    }

    public function setDados(array $dados): CadastrarItemPedidoService
    {
        $this->dados = $dados;

        return $this;
    }
}
