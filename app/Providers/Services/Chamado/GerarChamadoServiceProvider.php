<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Chamado;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ChamadoRepository;
use App\Services\Chamado\GerarChamado\GerarChamadoService;
use App\Services\Chamado\GerarChamado\Contracts\GerarChamadoService as ContractsGerarChamadoService;

class GerarChamadoServiceProvider extends ServiceProvider
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
        $service = new GerarChamadoService();
        $service->setChamadoRepository(app(ChamadoRepository::class));

        $this->app->bind(ContractsGerarChamadoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
