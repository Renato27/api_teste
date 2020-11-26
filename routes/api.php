<?php

use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\ContatoController;
use App\Http\Controllers\Api\EnderecoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['api.'], function () {
    
    Route::apiResources([
        'clientes'      => ClienteController::class,
        'enderecos'     => EnderecoController::class,
        'contatos'      => ContatoController::class
    ]);
});
