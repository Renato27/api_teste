<?php

namespace App\Services\Entrega\CadastrarEntrega;

use App\Services\Entrega\CadastrarEntrega\Abstracts\CadastrarEntregaServiceAbstract;
use Illuminate\Support\Facades\DB;

class CadastrarEntregaService extends CadastrarEntregaServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): bool
    {
        DB::transaction(function () {

            $this->CadastrarEntrega();
        });

        return true;
    }
}
