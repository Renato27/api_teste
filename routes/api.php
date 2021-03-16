<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PedidoController;
use App\Http\Controllers\Api\ChamadoController;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\ContatoController;
use App\Http\Controllers\Api\LicencaController;
use App\Http\Controllers\Api\SelecaoController;
use App\Http\Controllers\Api\UsuarioController;
use App\Http\Controllers\Api\ContratoController;
use App\Http\Controllers\Api\EnderecoController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\SeparacaoController;
use App\Http\Controllers\Api\PatrimonioController;
use App\Http\Controllers\Api\FuncionarioController;
use App\Http\Controllers\Api\ItemDefinidoController;
use App\Http\Controllers\Api\TipoPatrimonioController;
use App\Http\Controllers\NotaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['api']], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::resource('usuarios', UsuarioController::class);

    Route::group(['middleware' => ['jwt.verify']], function () {
        Route::apiResources([
            'clientes'              => ClienteController::class,
            'enderecos'             => EnderecoController::class,
            'contatos'              => ContatoController::class,
            'funcionarios'          => FuncionarioController::class,
            'pedidos'               => PedidoController::class,
            'patrimonios'           => PatrimonioController::class,
            'contratos'             => ContratoController::class,
            'selecoes'              => SelecaoController::class,
            'separacoes'            => SeparacaoController::class,
            'item_definidos'        => ItemDefinidoController::class,
            'tipo_patrimonios'      => TipoPatrimonioController::class,
            'dashboard_gestao'      => DashboardController::class,
            'chamados'              => ChamadoController::class,
            'licencas'              => LicencaController::class,
            'notas'                 => NotaController::class,
        ]);
        Route::post('logout', [AuthController::class, 'logout']);
    });
});

Route::fallback(function () {
    return response()->json([
        'message' => 'Página não encontrada. Se o erro continuar, entre em contato com renato.maldonado@logicatecnologia.com.br',
    ], 404);
});
