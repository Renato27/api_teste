<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Contratos\CadastrarContrato;

use App\Models\Contratos\Contrato;
use Illuminate\Support\Facades\DB;
use App\Services\Contratos\CadastrarContrato\Abstracts\CadastrarContratoServiceAbstract;

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

        DB::transaction(function () use (&$contrato) {
            $contrato = $this->cadastrarContrato();
        });

        return $contrato;
    }
}
