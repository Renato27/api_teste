<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Patrimonio\CadastrarPatrimonio;

use Illuminate\Support\Facades\DB;
use App\Models\Patrimonio\Patrimonio;
use App\Services\Patrimonio\CadastrarPatrimonio\Abstracts\CadastrarPatrimonioServiceAbstract;

final class CadastrarPatrimonioService extends CadastrarPatrimonioServiceAbstract
{
    /**
     * Processa os dados.
     *
     * @return Patrimonio|null
     */
    public function handle(): ?Patrimonio
    {
        $patrimonio = null;

        DB::transaction(function () use (&$patrimonio) {
            $patrimonio = $this->CadastrarPatrimonio();
        });

        return $patrimonio;
    }
}
