<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\ItemPedido\CadastrarItemPedido\Abstracts;

use App\Models\ItemPedido\ItemPedido;
use App\Services\ItemPedido\CadastrarItemPedido\Base\CadastrarItemPedidoServiceBase;

abstract class CadastrarItemPedidoServiceAbstract extends CadastrarItemPedidoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return bool
     */
    protected function CadastrarItemPedido() : ?ItemPedido
    {
        $dados = [
            'valor' => $this->dados['valor'],
            'quantidade' => $this->dados['quantidade'],
            'informacoes' => $this->dados['informacoes'],
            'modelo_id' => $this->dados['modelo_id'],
            'item_definido_id' => $this->dados['item_definido_id'],
        ];

        return $this->ItemPedidoRepository->createItemPedido($dados);
    }
}
