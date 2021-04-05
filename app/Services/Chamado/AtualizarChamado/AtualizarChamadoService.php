<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Chamado\AtualizarChamado;

use App\Models\Chamado\Chamado;
use Illuminate\Support\Facades\DB;
use App\Services\Chamado\AtualizarChamado\Abstracts\AtualizarChamadoServiceAbstract;

class AtualizarChamadoService extends AtualizarChamadoServiceAbstract
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
            $chamado = $this->AtualizarChamado();
        });

        return $chamado;
    }
}
