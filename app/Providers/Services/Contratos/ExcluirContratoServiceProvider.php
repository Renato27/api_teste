<?php

namespace App\Providers\Services\Contratos;

use App\Repositories\Contracts\ContratosRepository;
use App\Services\Contratos\ExcluirContrato\Contracts\ExcluirContratoService as ContractsExcluirContratoService;
use App\Services\Contratos\ExcluirContrato\ExcluirContratoService;
use Illuminate\Support\ServiceProvider;

class ExcluirContratoServiceProvider extends ServiceProvider
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
        $service = new ExcluirContratoService();
        $service->setContratoRepository(app(ContratosRepository::class));

        $this->app->bind(ContractsExcluirContratoService::class, function($app) use($service){
            return $service;
        });
    }
}
