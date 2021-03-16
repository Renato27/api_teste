<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\PatrimonioAlugado\GerarPatrimonioAlugado;

use Illuminate\Support\Facades\DB;
use App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Abstracts\GerarPatrimonioAlugadoServiceAbstract;

class GerarPatrimonioAlugadoService extends GerarPatrimonioAlugadoServiceAbstract
{
    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): bool
    {
        DB::transaction(function () {
            $this->GerarPatrimonioAlugado();
        });

        return true;
    }
}
