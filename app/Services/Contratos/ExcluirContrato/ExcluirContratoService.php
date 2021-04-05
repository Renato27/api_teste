<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Contratos\ExcluirContrato;

use Illuminate\Support\Facades\DB;
use App\Services\Contratos\ExcluirContrato\Abstracts\ExcluirContratoServiceAbstract;

class ExcluirContratoService extends ExcluirContratoServiceAbstract
{
    /**
     * Processa a exclusão do contrato.
     *
     * @return bool
     */
    public function handle() : bool
    {
        $contratoExcluido = false;

        DB::transaction(function () use (&$contratoExcluido) {
            $contratoExcluido = $this->excluirContrato();
        });

        return $contratoExcluido;
    }
}
