<?php

namespace App\Services\Contratos\AtualizarContrato;

use App\Models\Contratos\Contrato;
use App\Services\Contratos\AtualizarContrato\Abstracts\AtualizarContratoServiceAbstract;
use Illuminate\Support\Facades\DB;


class AtualizarContratoService extends AtualizarContratoServiceAbstract
{
    /**
     * Processa a atualização do contrato.
     *
     * @return Contrato|null
     */
    public function handle() : ?Contrato
    {
        $contrato = null;

        DB::transaction(function() use(&$contrato){

            $contrato = $this->atualizarContrato();
        });

        return $contrato;
    }
}
