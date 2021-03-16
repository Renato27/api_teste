<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Pedidos\CadastrarPedido;

use App\Models\Pedido\Pedido;
use Illuminate\Support\Facades\DB;
use App\Services\Pedidos\CadastrarPedido\Abstracts\CadastrarPedidoServiceAbstract;

final class CadastrarPedidoService extends CadastrarPedidoServiceAbstract
{
    /**
     * Processa os dados para cadastrar um pedido.
     *
     * @return Pedido
     */
    public function handle() : ?Pedido
    {
        $pedido = null;

        DB::transaction(function () use (&$pedido) {
            $pedido = $this->cadastrarPedidos();
        });

        return $pedido;
    }
}
