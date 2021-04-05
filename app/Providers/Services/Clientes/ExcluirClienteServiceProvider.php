<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Clientes;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ClienteRepository;
use App\Services\Clientes\ExcluirCliente\ExcluirClienteService;
use App\Services\Clientes\ExcluirCliente\Contracts\ExcluirClienteService as ContractsExcluirClienteService;

class ExcluirClienteServiceProvider extends ServiceProvider
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
        $service = new ExcluirClienteService();

        $service->setClienteRepository(app(ClienteRepository::class));

        $this->app->bind(ContractsExcluirClienteService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
