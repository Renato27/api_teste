<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Pedidos\AtualizarPedido;

use App\Models\Pedido\Pedido;
use Illuminate\Support\Facades\DB;
use App\Services\Pedidos\AtualizarPedido\Abstracts\AtualizarPedidoServiceAbstract;

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

        DB::transaction(function () use (&$pedido) {
            $pedido = $this->atualizarPedido();
        });

        return $pedido;
    }
}
