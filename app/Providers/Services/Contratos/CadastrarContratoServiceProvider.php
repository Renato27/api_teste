<?php

namespace App\Providers\Services\Contratos;

use App\Repositories\Contracts\ContratosRepository;
use App\Services\Contratos\CadastrarContrato\CadastrarContratoService;
use App\Services\Contratos\CadastrarContrato\Contracts\CadastrarContratoService as ContractsCadastrarContratoService;
use Illuminate\Support\ServiceProvider;

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

        $this->app->bind(ContractsCadastrarContratoService::class, function($app) use($service){
            return $service;
        });
    }
}
