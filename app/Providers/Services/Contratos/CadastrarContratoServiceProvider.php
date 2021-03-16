<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Contratos;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ContratosRepository;
use App\Services\Contratos\CadastrarContrato\CadastrarContratoService;
use App\Services\Contratos\CadastrarContrato\Contracts\CadastrarContratoService as ContractsCadastrarContratoService;

class CadastrarContratoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $service = new CadastrarContratoService();
        $service->setContratoRepository(app(ContratosRepository::class));

        $this->app->bind(ContractsCadastrarContratoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
