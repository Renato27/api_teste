<?php

namespace App\Services\Contratos\CadastrarContrato;

use App\Models\Contratos\Contrato;
use App\Services\Contratos\CadastrarContrato\Abstracts\CadastrarContratoServiceAbstract;
use Illuminate\Support\Facades\DB;

class CadastrarContratoService extends CadastrarContratoServiceAbstract
{
    /**
     * Processa os dados para cadastrar um contato.
     *
     * @return Contrato
     */
    public function handle() : ?Contrato
    {
        $contrato = null;

        DB::transaction(function () use(&$contrato){

            $contrato = $this->cadastrarContrato();
        });

        return $contrato;
    }
}
