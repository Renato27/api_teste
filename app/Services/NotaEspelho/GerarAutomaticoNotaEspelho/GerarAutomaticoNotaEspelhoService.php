<?php

namespace App\Services\NotaEspelho\GerarAutomaticoNotaEspelho;

use App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Abstracts\GerarAutomaticoNotaEspelhoServiceAbstract;

class GerarAutomaticoNotaEspelhoService extends GerarAutomaticoNotaEspelhoServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): bool
    {
        return true;
    }
}
