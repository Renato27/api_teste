<?php

namespace App\Services\NotaEspelho\GerarAutomaticoMedicaoNotaEspelho;

use App\Services\NotaEspelho\GerarAutomaticoMedicaoNotaEspelho\Abstracts\GerarAutomaticoMedicaoNotaEspelhoServiceAbstract;
use Illuminate\Support\Facades\DB;

class GerarAutomaticoMedicaoNotaEspelhoService extends GerarAutomaticoMedicaoNotaEspelhoServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): bool
    {
        DB::transaction(function () {

            $this->GerarAutomaticoMedicaoNotaEspelho();
        });

        return true;
    }
}
