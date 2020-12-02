<?php

namespace App\Services\Contratos\ExcluirContrato;

use App\Services\Contratos\ExcluirContrato\Abstracts\ExcluirContratoServiceAbstract;
use Illuminate\Support\Facades\DB;

class ExcluirContratoService extends ExcluirContratoServiceAbstract
{
    /**
     * Processa a exclusão do contrato.
     *
     * @return boolean
     */
    public function handle() : bool
    {
        $contratoExcluido = false;

        DB::transaction(function ()  use(&$contratoExcluido){

            $contratoExcluido = $this->excluirContrato();
        });

        return $contratoExcluido;
    }
}
