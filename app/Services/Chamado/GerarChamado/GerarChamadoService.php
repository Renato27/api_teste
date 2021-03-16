<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Chamado\GerarChamado;

use App\Models\Chamado\Chamado;
use Illuminate\Support\Facades\DB;
use App\Services\Chamado\GerarChamado\Abstracts\GerarChamadoServiceAbstract;

class GerarChamadoService extends GerarChamadoServiceAbstract
{
    /**
     * Processa os dados.
     *
     * @return Chamado|null
     */
    public function handle(): ?Chamado
    {
        $chamado = null;

        DB::transaction(function () use (&$chamado) {
            $chamado = $this->GerarChamado();
        });

        return $chamado;
    }
}
