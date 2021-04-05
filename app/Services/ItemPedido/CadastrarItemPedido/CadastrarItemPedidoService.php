<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\ItemPedido\CadastrarItemPedido;

use Illuminate\Support\Facades\DB;
use App\Models\ItemPedido\ItemPedido;
use App\Services\ItemPedido\CadastrarItemPedido\Abstracts\CadastrarItemPedidoServiceAbstract;

class CadastrarItemPedidoService extends CadastrarItemPedidoServiceAbstract
{
    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): ?ItemPedido
    {
        $retorno = null;

        DB::transaction(function () use (&$retorno) {
            $retorno = $this->CadastrarItemPedido();
        });

        return $retorno;
    }
}
