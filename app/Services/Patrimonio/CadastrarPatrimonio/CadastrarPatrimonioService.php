<?php

namespace App\Services\Patrimonio\CadastrarPatrimonio;

use App\Models\Patrimonio\Patrimonio;
use App\Services\Patrimonio\CadastrarPatrimonio\Abstracts\CadastrarPatrimonioServiceAbstract;
use Illuminate\Support\Facades\DB;

class CadastrarPatrimonioService extends CadastrarPatrimonioServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return Patrimonio|null
     */
    public function handle(): ?Patrimonio
    {
        $patrimonio = null;

        DB::transaction(function () use(&$patrimonio){

            $patrimonio = $this->CadastrarPatrimonio();
        });

        return $patrimonio;
    }
}
