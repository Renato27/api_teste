<?php

namespace App\Services\ItemPedido\CadastrarItemPedido;

use App\Models\ItemPedido\ItemPedido;
use App\Services\ItemPedido\CadastrarItemPedido\Abstracts\CadastrarItemPedidoServiceAbstract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CadastrarItemPedidoService extends CadastrarItemPedidoServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): ?ItemPedido
    {
        $retorno = null;

        DB::transaction(function () use(&$retorno){
            $retorno =  $this->CadastrarItemPedido();
        });

        return $retorno;

    }
}
