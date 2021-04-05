<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Clientes;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ClienteRepository;
use App\Services\Clientes\AtualizarCliente\AtualizarClienteService;
use App\Services\Clientes\AtualizarCliente\Contracts\AtualizarClienteService as ContractsAtualizarClienteService;

class AtualizarClienteServiceProvider extends ServiceProvider
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
        $service = new AtualizarClienteService();

        $service->setClienteRepository(app(ClienteRepository::class));

        $this->app->bind(ContractsAtualizarClienteService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
