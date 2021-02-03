<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Expedicao\Expedicao;
use App\Services\Entrega\CadastrarEntrega\Contracts\CadastrarEntregaService;
use Illuminate\Http\Request;

class ExpedicaoController extends Controller
{
    public function selecao(Request $request, Expedicao $expedicao, CadastrarEntregaService $service)
    {
        try {
            $service->setExpedicao($expedicao->id);
            $service->setPatrimonios($request->patrimonios)->handle();


        } catch (\Throwable $th) {
            dd($th->getMessage());
        }

    }

    public function separacao()
    {

    }
}
