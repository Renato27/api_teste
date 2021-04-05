<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Patrimonio\CadastrarPatrimonio\Abstracts;

use App\Models\Patrimonio\Patrimonio;
use App\Services\Patrimonio\CadastrarPatrimonio\Base\CadastrarPatrimonioServiceBase;

abstract class CadastrarPatrimonioServiceAbstract extends CadastrarPatrimonioServiceBase
{
    /**
     * Implementação do código.
     *
     * @return Patrimonio|null
     */
    protected function CadastrarPatrimonio() : ?Patrimonio
    {
        $patrimonio = $this->PatrimonioRepository->createPatrimonio($this->dados);

        if (! $patrimonio) {
            return null;
        }

        return $patrimonio;
    }
}
