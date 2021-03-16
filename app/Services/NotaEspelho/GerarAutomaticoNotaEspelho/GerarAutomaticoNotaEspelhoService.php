<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\NotaEspelho\GerarAutomaticoNotaEspelho;

use Illuminate\Support\Facades\DB;
use App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Abstracts\GerarAutomaticoNotaEspelhoServiceAbstract;

class GerarAutomaticoNotaEspelhoService extends GerarAutomaticoNotaEspelhoServiceAbstract
{
    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): bool
    {
        DB::transaction(function () {
            $this->GerarAutomaticoNotaEspelho();
        });

        return true;
    }
}
