<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Entrega\CadastrarEntrega;

use Illuminate\Support\Facades\DB;
use App\Services\Entrega\CadastrarEntrega\Abstracts\CadastrarEntregaServiceAbstract;

class CadastrarEntregaService extends CadastrarEntregaServiceAbstract
{
    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): bool
    {
        DB::transaction(function () {
            $this->CadastrarEntrega();
        });

        return true;
    }
}
