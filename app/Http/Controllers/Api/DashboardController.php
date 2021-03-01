<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ChamadoResource;
use App\Http\Resources\DashboardResource;
use App\Models\Chamado\Chamado;

class DashboardController extends Controller
{
    public function gestao()
    {
        $chamados = Chamado::with(['status_chamado:id,nome', 'tipo_chamado:id,nome'])->get();

        return DashboardResource::collection($chamados);
    }
}
