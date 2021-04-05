<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\NotaEspelho;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\NotaEspelhoRepository;
use App\Services\NotaEspelho\GerarNotaEspelho\GerarNotaEspelhoService;
use App\Services\NotaEspelho\GerarNotaEspelho\Contracts\GerarNotaEspelhoService as ContractsGerarNotaEspelhoService;

class GerarNotaEspelhoServiceProvider extends ServiceProvider
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
        $service = new GerarNotaEspelhoService();

        $service->setNotaEspelhoRepository(app(NotaEspelhoRepository::class));

        $this->app->bind(ContractsGerarNotaEspelhoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
