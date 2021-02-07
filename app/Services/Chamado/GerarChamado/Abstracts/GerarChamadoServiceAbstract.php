<?php

namespace App\Services\Chamado\GerarChamado\Abstracts;

use App\Models\Chamado\Chamado;
use App\Models\StatusChamado\StatusChamado;
use App\Services\Chamado\GerarChamado\Base\GerarChamadoServiceBase;

abstract class GerarChamadoServiceAbstract extends GerarChamadoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return Chamado|null
     */
    protected function GerarChamado() : ?Chamado
    {
        $chamadoGerado = $this->ChamadoRepository->createChamado($this->dados);

        if(!$chamadoGerado) return null;

        return $chamadoGerado;
    }
}
