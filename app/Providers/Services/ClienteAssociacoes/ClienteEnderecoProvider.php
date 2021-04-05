<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\ClienteAssociacoes;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ClienteEnderecoRepository;
use App\Services\ClienteEnderecos\AssociarClienteEnderecoService;
use App\Services\ClienteEnderecos\Contracts\AssociarClienteEnderecoService as ContractsAssociarClienteEnderecoService;

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

        $this->app->bind(ContractsAssociarClienteEnderecoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
