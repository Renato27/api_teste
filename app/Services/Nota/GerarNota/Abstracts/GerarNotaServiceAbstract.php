<?php

namespace App\Services\Nota\GerarNota\Abstracts;

use App\Models\Nota\Nota;
use App\Services\Nota\GerarNota\Base\GerarNotaServiceBase;

abstract class GerarNotaServiceAbstract extends GerarNotaServiceBase
{
    /**
     * Implementação do código.
     *
     * @return boolean
     */
    protected function GerarNota() : ?Nota
    {
        return $this->NotaRepository->createNota($this->dados);
    }
}
