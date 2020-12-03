<?php

namespace App\Providers\Services\Contratos;

use App\Repositories\Contracts\ContratosRepository;
use App\Services\Contratos\AtualizarContrato\AtualizarContratoService;
use App\Services\Contratos\AtualizarContrato\Contracts\AtualizarContratoService as ContractsAtualizarContratoService;
use Illuminate\Support\ServiceProvider;

class AtualizarContratoServiceProvider extends ServiceProvider
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
        $service = new AtualizarContratoService();
        $service->setContratoRepository(app(ContratosRepository::class));

        $this->app->bind(ContractsAtualizarContratoService::class, function($app) use($service){
            return $service;
        });
    }
}
