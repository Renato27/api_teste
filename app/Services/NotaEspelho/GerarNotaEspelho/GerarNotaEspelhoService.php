<?php

namespace App\Services\NotaEspelho\GerarNotaEspelho;

use App\Services\NotaEspelho\GerarNotaEspelho\Abstracts\GerarNotaEspelhoServiceAbstract;
use Illuminate\Support\Facades\DB;

class GerarNotaEspelhoService extends GerarNotaEspelhoServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): bool
    {
        DB::transaction(function () {

            $this->GerarNotaEspelho();
        });

        return true;
    }
}
