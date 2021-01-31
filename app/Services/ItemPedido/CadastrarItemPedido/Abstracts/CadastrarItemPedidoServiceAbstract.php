<?php

namespace App\Services\ItemPedido\CadastrarItemPedido\Abstracts;

use App\Models\ItemPedido\ItemPedido;
use App\Services\ItemPedido\CadastrarItemPedido\Base\CadastrarItemPedidoServiceBase;
use Illuminate\Database\Eloquent\Model;

abstract class CadastrarItemPedidoServiceAbstract extends CadastrarItemPedidoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return boolean
     */
    protected function CadastrarItemPedido() : ?ItemPedido
    {
        $dados = [
            'valor' => $this->dados['valor'],
            'quantidade' => $this->dados['quantidade'],
            'informacoes' => $this->dados['informacoes']
        ];

        return $this->ItemPedidoRepository->createItemPedido($dados);

    }
}
