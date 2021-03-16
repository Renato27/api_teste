<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Entrega\CadastrarEntrega\Abstracts;

use App\Events\Entrega;
use App\Services\Entrega\CadastrarEntrega\Base\CadastrarEntregaServiceBase;

abstract class CadastrarEntregaServiceAbstract extends CadastrarEntregaServiceBase
{
    /**
     * Implementação do código.
     *
     * @return bool
     */
    protected function CadastrarEntrega() : bool
    {
        $entrega = $this->EntregaRepository->createEntrega(['chamado_id' => null, 'expedicao_id' => $this->expedicao->id]);

        if (! isset($entrega->id)) {
            return false;
        }

        foreach ($this->patrimonios as $patrimonio) {
            event(new Entrega($entrega, $patrimonio, $this->item_pedido));
        }

        return true;
    }
}
