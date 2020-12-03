<?php

namespace App\Services\Pedidos\ExcluirPedido;

use App\Services\Pedidos\ExcluirPedido\Abstracts\ExcluirPedidoServiceAbstract;
use Illuminate\Support\Facades\DB;

class ExcluirPedidoService extends ExcluirPedidoServiceAbstract
{
    /**
     * Processa a exclusão do pedido.
     *
     * @return boolean
     */
    public function handle() : bool
    {
        $pedidoExcluido = false;

        DB::transaction(function ()  use(&$pedidoExcluido){

            $pedidoExcluido = $this->excluirPedido();
        });

        return $pedidoExcluido;
    }
}
