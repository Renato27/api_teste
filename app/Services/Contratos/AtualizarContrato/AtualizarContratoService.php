<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Contratos\AtualizarContrato;

use App\Models\Contratos\Contrato;
use Illuminate\Support\Facades\DB;
use App\Services\Contratos\AtualizarContrato\Abstracts\AtualizarContratoServiceAbstract;

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

        DB::transaction(function () use (&$contrato) {
            $contrato = $this->atualizarContrato();
        });

        return $contrato;
    }
}
