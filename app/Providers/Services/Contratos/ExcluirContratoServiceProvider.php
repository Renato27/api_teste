<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Contratos;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ContratosRepository;
use App\Services\Contratos\ExcluirContrato\ExcluirContratoService;
use App\Services\Contratos\ExcluirContrato\Contracts\ExcluirContratoService as ContractsExcluirContratoService;

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

        $this->app->bind(ContractsExcluirContratoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
