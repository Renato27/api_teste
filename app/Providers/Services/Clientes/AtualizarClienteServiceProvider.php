<?php

namespace App\Providers\Services\Clientes;

use App\Repositories\Contracts\ClienteRepository;
use App\Services\Clientes\AtualizarCliente\AtualizarClienteService;
use App\Services\Clientes\AtualizarCliente\Contracts\AtualizarClienteService as ContractsAtualizarClienteService;
use Illuminate\Support\ServiceProvider;

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

        $this->app->bind(ContractsAtualizarClienteService::class, function($app) use($service){
            return $service;
        });
    }
}
