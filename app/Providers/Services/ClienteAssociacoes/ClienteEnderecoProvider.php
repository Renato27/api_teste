<?php

namespace App\Providers\Services\ClienteAssociacoes;

use App\Repositories\Contracts\ClienteEnderecoRepository;
use App\Services\ClienteEnderecos\AssociarClienteEnderecoService;
use App\Services\ClienteEnderecos\Contracts\AssociarClienteEnderecoService as ContractsAssociarClienteEnderecoService;
use Illuminate\Support\ServiceProvider;

class ClienteEnderecoProvider extends ServiceProvider
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
        $service = new AssociarClienteEnderecoService();

        $service->setClienteEnderecoRepository(app(ClienteEnderecoRepository::class));

        $this->app->bind(ContractsAssociarClienteEnderecoService::class, function($app) use($service){
            return $service;
        });
    }
}
