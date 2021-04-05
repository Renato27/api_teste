<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Contratos;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ContratosRepository;
use App\Services\Contratos\AtualizarContrato\AtualizarContratoService;
use App\Services\Contratos\AtualizarContrato\Contracts\AtualizarContratoService as ContractsAtualizarContratoService;

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

        $this->app->bind(ContractsAtualizarContratoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
