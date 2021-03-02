<?php

namespace App\Services\Chamado\AtualizarChamado;

use App\Models\Chamado\Chamado;
use App\Services\Chamado\AtualizarChamado\Abstracts\AtualizarChamadoServiceAbstract;
use Illuminate\Support\Facades\DB;

class AtualizarChamadoService extends AtualizarChamadoServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): ?Chamado
    {
        $chamado = null;

        DB::transaction(function () use(&$chamado){

            $chamado = $this->AtualizarChamado();

        });

        return $chamado;
    }
}
