<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\NotaEspelho\GerarAutomaticoMedicaoNotaEspelho;

use Illuminate\Support\Facades\DB;
use App\Services\NotaEspelho\GerarAutomaticoMedicaoNotaEspelho\Abstracts\GerarAutomaticoMedicaoNotaEspelhoServiceAbstract;

class GerarAutomaticoMedicaoNotaEspelhoService extends GerarAutomaticoMedicaoNotaEspelhoServiceAbstract
{
    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): bool
    {
        DB::transaction(function () {
            $this->GerarAutomaticoMedicaoNotaEspelho();
        });

        return true;
    }
}
