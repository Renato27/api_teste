<?php

namespace App\Providers\Services\Clientes;

use App\Repositories\Contracts\ClienteRepository;
use App\Services\Clientes\ExcluirCliente\Contracts\ExcluirClienteService as ContractsExcluirClienteService;
use App\Services\Clientes\ExcluirCliente\ExcluirClienteService;
use Illuminate\Support\ServiceProvider;

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

        $this->app->bind(ContractsExcluirClienteService::class, function($app) use($service){
            return $service;
        });
    }
}
