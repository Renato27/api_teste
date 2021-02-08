<?php

namespace App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Abstracts;

use App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Base\GerarPatrimonioAlugadoServiceBase;

abstract class GerarPatrimonioAlugadoServiceAbstract extends GerarPatrimonioAlugadoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return boolean
     */
    protected function GerarPatrimonioAlugado() : bool
    {

    }

    private function getDados()
    {
        foreach($this->chamado->entrega->patrimonios as $entregaPatrimonio){

            return [
                'data_entrega'      => $this->chamado->pedido->data_entrega,
                'valor'             => $entregaPatrimonio->item->item_definido->valor,
                'patrimonio_id'     => $entregaPatrimonio->patrimonio_id,
                'pedido_id'         => $this->chamado->pedido_id,
                'cliente_id'        => $this->chamado->pedido->contrato->cliente->id,
                'item_pedido_id'    => $entregaPatrimonio->item_id,
                'chamado_id'        => $this->chamado->id,
                'endereco_id'       => $this->chamado->endereco_id
            ];
        }
    }

    private function gerarFicha()
    {

    }
}
