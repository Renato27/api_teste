<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Nota\GerarNota;

use App\Models\Nota\Nota;
use Illuminate\Support\Facades\DB;
use App\Services\Nota\GerarNota\Abstracts\GerarNotaServiceAbstract;

class GerarNotaService extends GerarNotaServiceAbstract
{
    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): ?Nota
    {
        $nota = null;

        DB::transaction(function () use (&$nota) {
            $nota = $this->GerarNota();
        });

        return $nota;
    }
}
