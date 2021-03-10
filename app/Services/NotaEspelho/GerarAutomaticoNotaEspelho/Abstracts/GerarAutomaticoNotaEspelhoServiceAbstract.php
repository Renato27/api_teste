<?php

namespace App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Abstracts;

use App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Base\GerarAutomaticoNotaEspelhoServiceBase;

abstract class GerarAutomaticoNotaEspelhoServiceAbstract extends GerarAutomaticoNotaEspelhoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return boolean
     */
    protected function GerarAutomaticoNotaEspelho() : bool
    {
        return true;
    }
}
