<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Controllers\Api;

use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\NotaRepository;
use App\Repositories\Contracts\ChamadoRepository;
use App\Repositories\Contracts\ClienteRepository;
use App\Repositories\Contracts\CobrancaRepository;
use App\Repositories\Contracts\ContratosRepository;
use App\Repositories\Contracts\LicencaPatrimonioRepository;
use App\Repositories\Contracts\NotaEspelhoRepository;
use App\Repositories\Contracts\NotaSerasaRepository;
use App\Repositories\Contracts\ReajusteContratoRepository;

class DashboardController extends Controller
{
    public function index(ContratosRepository $contratosRepository)
    {
        $cobrancaRespository = app(CobrancaRepository::class);
        $notaRepository = app(NotaRepository::class);
        $notaEspelhoRepository = app(NotaEspelhoRepository::class);
        $chamadoRepository = app(ChamadoRepository::class);
        $notaSerasaRepository = app(NotaSerasaRepository::class);
        $reajusteContratoRepository = app(ReajusteContratoRepository::class);
        $licencaPatrimonioRepository = app(LicencaPatrimonioRepository::class);

        $usuario = JWTAuth::parseToken()->authenticate();

        if ($usuario->tipo_usuario_id == 5) {
            $dados = [];

            $dados['Chamados'] = $chamadoRepository->getChamadosDashboardGestao();

            $dados['Espelhos'] = $notaEspelhoRepository->getNotaEspelhos();

            $dados['Notas'] = $notaRepository->getNotas();

            $dados['Cobrancas'] = $cobrancaRespository->getCobrancaMonitoramento();

            $dados['Contratos'] = $contratosRepository->getContratosAVencer();

            $dados['Notas_Grafico'] = $notaRepository->getNotasGrafico();

            $dados['Cliente_Serasa'] = $notaRepository->getClientesNotaVencidaAMais10dias();

            $dados['Notas_Serasa'] = $notaSerasaRepository->getClienteNotasProtesto();

            $dados['Reajuste_Contrato'] = $reajusteContratoRepository->reajusteVencimento();

            return response()->json($dados);
        }

        if($usuario->tipo_usuario_id == 4){
            $dados = [];

            $dados['Chamados_Fechados'] = $chamadoRepository->getChamadosDashboardAssistente();

            $dados['Cobrancas'] = $cobrancaRespository->getCobrancaMonitoramento();

            $dados['Notas_Vencidas_Sete_Dias'] = $notaRepository->notasVencidas7Dias();

            return response()->json($dados);
        }

        if($usuario->tipo_usuario_id == 3){
            $dados = [];

            $dados['Chamados_Pendentes'] = $chamadoRepository->getChamadosDashboardSuporteNivel2();

            $dados['Seus_Chamados_Estoquista'] = $chamadoRepository->getChamadosDashboardSuporteNivel2($usuario->id);

            $dados['Estoque_Pendencias'] = collect();

            return response()->json($dados);
        }

        if($usuario->tipo_usuario_id == 2){
            $dados = [];

            $dados['Chamados_Pendentes'] = $chamadoRepository->getChamadosDashboardSuporteNivel2();

            $dados['Seus_Chamados_Nivel2'] = $chamadoRepository->getChamadosDashboardSuporteNivel2($usuario->id);

            $dados['Licenca_Pendencias'] = $licencaPatrimonioRepository->getLicencasRetirar();

            return response()->json($dados);
        }

        if($usuario->tipo_usuario_id == 1){
            $dados = [];

            $dados['Chamados_Pendentes'] = $chamadoRepository->getChamadosDashboardSuporteNivel2();

            $dados['Seus_Chamados_Nivel1'] = $chamadoRepository->getChamadosDashboardSuporteNivel2($usuario->id);

            return response()->json($dados);
        }
    }
}
