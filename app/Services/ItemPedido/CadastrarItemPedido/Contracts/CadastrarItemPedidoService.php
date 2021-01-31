<?php

namespace App\Services\ItemPedido\CadastrarItemPedido\Contracts;

use App\Models\ItemPedido\ItemPedido;
use App\Repositories\Contracts\ItemPedidoRepository;
use Illuminate\Database\Eloquent\Model;

interface CadastrarItemPedidoService
{
    /**
     * Seta a model de ItemPedido.
     *
     * @param ItemPedido
     * @return CadastrarItemPedidoService
     */
    public function setItemPedido(?ItemPedido $ItemPedido): CadastrarItemPedidoService;

    /**
     * Undocumented function
     *
     * @param array $dados
     * @return CadastrarItemPedidoService
     */
    public function setDados(array $dados) : CadastrarItemPedidoService;

    /**
     * Seta o repositório de ItemPedidoRepository.
     *
     * @param ItemPedidoRepository $ItemPedidoRepository
     * @return CadastrarItemPedidoService
     */
    public function setItemPedidoRepository(ItemPedidoRepository $ItemPedidoRepository): CadastrarItemPedidoService;

    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): ?ItemPedido;
}
