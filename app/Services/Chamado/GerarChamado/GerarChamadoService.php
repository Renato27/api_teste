<?php

namespace App\Services\Chamado\GerarChamado;

use App\Models\Chamado\Chamado;
use App\Services\Chamado\GerarChamado\Abstracts\GerarChamadoServiceAbstract;
use Illuminate\Support\Facades\DB;

class GerarChamadoService extends GerarChamadoServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return Chamado|null
     */
    public function handle(): ?Chamado
    {
        $chamado = null;

        DB::transaction(function () use(&$chamado){

            $chamado =  $this->GerarChamado();
        });

        return $chamado;
    }
}
