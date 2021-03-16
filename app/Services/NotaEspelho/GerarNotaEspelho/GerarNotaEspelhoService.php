<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\NotaEspelho\GerarNotaEspelho;

use Illuminate\Support\Facades\DB;
use App\Services\NotaEspelho\GerarNotaEspelho\Abstracts\GerarNotaEspelhoServiceAbstract;

class GerarNotaEspelhoService extends GerarNotaEspelhoServiceAbstract
{
    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): bool
    {
        DB::transaction(function () {
            $this->GerarNotaEspelho();
        });

        return true;
    }
}
