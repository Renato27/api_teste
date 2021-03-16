<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Pedidos\ExcluirPedido;

use Illuminate\Support\Facades\DB;
use App\Services\Pedidos\ExcluirPedido\Abstracts\ExcluirPedidoServiceAbstract;

class ExcluirPedidoService extends ExcluirPedidoServiceAbstract
{
    /**
     * Processa a exclusão do pedido.
     *
     * @return bool
     */
    public function handle() : bool
    {
        $pedidoExcluido = false;

        DB::transaction(function () use (&$pedidoExcluido) {
            $pedidoExcluido = $this->excluirPedido();
        });

        return $pedidoExcluido;
    }
}
