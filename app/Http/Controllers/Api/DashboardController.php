<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ChamadoResource;
use App\Http\Resources\DashboardResource;
use App\Models\Chamado\Chamado;
use App\Models\NotaEspelho\NotaEspelho;
use Tymon\JWTAuth\Facades\JWTAuth;

class DashboardController extends Controller
{
    public function index()
    {
        $usuario = JWTAuth::parseToken()->authenticate();

        if($usuario->tipo_usuario_id == 5){

            $dados = [];

            $dados['Chamados'][] = Chamado::whereHas('status_chamado', function($query){
                return $query->where('id', '<>', 5)->where('id', '<>', 6);
            })->get();

            $dados['Espelhos'][] = NotaEspelho::whereHas('nota_espelho_estado', function($query){
                return $query->where('id', 1);
            })->get();


            return response()->json($dados);
        }

    }
}
