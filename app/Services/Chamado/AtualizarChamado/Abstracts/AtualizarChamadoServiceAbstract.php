<?php

namespace App\Services\Chamado\AtualizarChamado\Abstracts;

use App\Models\Chamado\Chamado;
use App\Services\Chamado\AtualizarChamado\Base\AtualizarChamadoServiceBase;

abstract class AtualizarChamadoServiceAbstract extends AtualizarChamadoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return boolean
     */
    protected function AtualizarChamado() : ?Chamado
    {
        $chamado = $this->ChamadoRepository->updateChamado($this->Chamado->id, $this->dados);

        //Atualizar o contador do chamado se ele for de contador.

        return $chamado;
    }
}
