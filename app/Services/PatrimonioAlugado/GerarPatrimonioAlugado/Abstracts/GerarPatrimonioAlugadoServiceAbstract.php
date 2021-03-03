<?php

namespace App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Abstracts;

use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Base\GerarPatrimonioAlugadoServiceBase;

abstract class GerarPatrimonioAlugadoServiceAbstract extends GerarPatrimonioAlugadoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return boolean
     */
    protected function GerarPatrimonioAlugado() : ?PatrimonioAlugado
    {
        $aluguel = $this->PatrimonioAlugadoRepository->createPatrimonioAlugado($this->getDados());

        if(!isset($aluguel->id)) return null;

        return $aluguel;
    }

    private function getDados() : array
    {
        return [
            'data_entrega'      => $this->chamado->pedido->data_entrega,
            'valor'             => $this->entregaPatrimonio->item_pedido->item_definido->valor,
            'patrimonio_id'     => $this->entregaPatrimonio->patrimonio_id,
            'pedido_id'         => $this->chamado->pedido_id,
            'cliente_id'        => $this->chamado->pedido->contrato->cliente->id,
            'item_pedido_id'    => $this->entregaPatrimonio->item_pedido_id,
            'chamado_id'        => $this->chamado->id,
            'endereco_id'       => $this->chamado->endereco_id
        ];

    }
}
