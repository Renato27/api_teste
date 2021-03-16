<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\ItemPedido\CadastrarItemPedido\Contracts;

use App\Models\ItemPedido\ItemPedido;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ItemPedidoRepository;

interface CadastrarItemPedidoService
{
    /**
     * Seta a model de ItemPedido.
     *
     * @param ItemPedido
     * @return CadastrarItemPedidoService
     */
    public function setItemPedido(?ItemPedido $ItemPedido): self;

    /**
     * Undocumented function.
     *
     * @param array $dados
     * @return CadastrarItemPedidoService
     */
    public function setDados(array $dados) : self;

    /**
     * Seta o repositório de ItemPedidoRepository.
     *
     * @param ItemPedidoRepository $ItemPedidoRepository
     * @return CadastrarItemPedidoService
     */
    public function setItemPedidoRepository(ItemPedidoRepository $ItemPedidoRepository): self;

    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): ?ItemPedido;
}
