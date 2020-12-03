<?php

namespace App\Services\Pedidos\AtualizarPedido;

use App\Models\Pedido\Pedido;
use App\Services\Pedidos\AtualizarPedido\Abstracts\AtualizarPedidoServiceAbstract;
use Illuminate\Support\Facades\DB;

class AtualizarPedidoService extends AtualizarPedidoServiceAbstract
{
    /**
     * Processa a atualização do pedido.
     *
     * @return Pedido|null
     */
    public function handle() : ?Pedido
    {
        $pedido = null;

        DB::transaction(function() use(&$pedido){

            $pedido = $this->atualizarPedido();
        });

        return $pedido;
    }
}
