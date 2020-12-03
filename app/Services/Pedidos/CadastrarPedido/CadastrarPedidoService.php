<?php

namespace App\Services\Pedidos\CadastrarPedido;

use App\Models\Pedido\Pedido;
use App\Services\Pedidos\CadastrarPedido\Abstracts\CadastrarPedidoServiceAbstract;
use Illuminate\Support\Facades\DB;

class CadastrarPedidoService extends CadastrarPedidoServiceAbstract
{
    /**
     * Processa os dados para cadastrar um pedido.
     *
     * @return Pedido
     */
    public function handle() : ?Pedido
    {
        $pedido = null;

        DB::transaction(function () use(&$pedido){

            $pedido = $this->cadastrarPedidos();
        });

        return $pedido;
    }
}
