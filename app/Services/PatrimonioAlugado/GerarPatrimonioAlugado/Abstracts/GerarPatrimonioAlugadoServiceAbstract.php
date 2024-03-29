<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Abstracts;

use App\Models\TrocaPatrimonio\TrocaPatrimonio;
use App\Models\EntregaPatrimonio\EntregaPatrimonio;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Base\GerarPatrimonioAlugadoServiceBase;

abstract class GerarPatrimonioAlugadoServiceAbstract extends GerarPatrimonioAlugadoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return bool
     */
    protected function GerarPatrimonioAlugado() : ?PatrimonioAlugado
    {
        $aluguel = $this->PatrimonioAlugadoRepository->createPatrimonioAlugado($this->getDados());

        if (! isset($aluguel->id)) {
            return null;
        }

        return $aluguel;
    }

    private function getDados() : array
    {
        if ($this->model instanceof EntregaPatrimonio) {
            return [
                'data_entrega' => $this->chamado->pedido->data_entrega,
                'valor' => $this->model->item_pedido->item_definido->valor,
                'patrimonio_id' => $this->model->patrimonio_id,
                'pedido_id' => $this->chamado->pedido_id,
                'cliente_id' => $this->chamado->pedido->contrato->cliente->id,
                'item_pedido_id' => $this->model->item_pedido_id,
                'chamado_id' => $this->chamado->id,
                'endereco_id' => $this->chamado->endereco_id,
            ];
        }

        if ($this->model instanceof TrocaPatrimonio) {
            $aluguelRetirar = $this->PatrimonioAlugadoRepository->getPatrimonioAlugadoByPatrimonio($this->trocaPatrimonioRetirada->patrimonio_id);

            return [
                'data_entrega' => $aluguelRetirar->data_entrega,
                'valor' => $aluguelRetirar->valor,
                'patrimonio_id' => $this->model->patrimonio_id,
                'pedido_id' => $aluguelRetirar->pedido_id,
                'cliente_id' => $aluguelRetirar->cliente_id,
                'item_pedido_id' => $aluguelRetirar->item_pedido_id,
                'chamado_id' => $aluguelRetirar->chamado_id,
                'endereco_id' => $aluguelRetirar->endereco_id,
            ];
        }
    }
}
