<?php

namespace App\Services\PatrimonioAlugado\GerarPatrimonioAlugado;

use App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Abstracts\GerarPatrimonioAlugadoServiceAbstract;
use Illuminate\Support\Facades\DB;

class GerarPatrimonioAlugadoService extends GerarPatrimonioAlugadoServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): bool
    {
        DB::transaction(function () {

            $this->GerarPatrimonioAlugado();
        });

        return true;
    }
}
