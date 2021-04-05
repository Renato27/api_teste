<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Nota;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\NotaRepository;
use App\Services\Nota\GerarNota\GerarNotaService;
use App\Services\Nota\GerarNota\Contracts\GerarNotaService as ContractsGerarNotaService;

class GerarNotaServiceProvider extends ServiceProvider
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
        $service = new GerarNotaService();

        $service->setNotaRepository(app(NotaRepository::class));

        $this->app->bind(ContractsGerarNotaService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
