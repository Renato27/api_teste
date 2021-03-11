<?php

namespace App\Services\NotaEspelho\GerarAutomaticoNotaEspelho;

use App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Abstracts\GerarAutomaticoNotaEspelhoServiceAbstract;
use Illuminate\Support\Facades\DB;

class GerarAutomaticoNotaEspelhoService extends GerarAutomaticoNotaEspelhoServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): bool
    {
        DB::transaction(function () {
            $this->GerarAutomaticoNotaEspelho();
        });

        return true;
    }
}
