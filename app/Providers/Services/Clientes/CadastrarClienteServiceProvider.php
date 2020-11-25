<?php

namespace App\Providers\Services\Clientes;

use App\Repositories\Contracts\ClienteRepository;
use App\Services\Clientes\CadastrarCliente\CadastrarClienteService;
use App\Services\Clientes\CadastrarCliente\Contracts\CadastrarClienteService as ContractsCadastrarClienteService;
use Illuminate\Support\ServiceProvider;

class CadastrarClienteServiceProvider extends ServiceProvider
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
        $service = new CadastrarClienteService();

        $service->setClienteRepository(app(ClienteRepository::class));

        $this->app->bind(ContractsCadastrarClienteService::class, function($app) use($service){
            return $service;
        });
    }
}
