<?php

namespace App\Providers\Services\ClienteAssociacoes;

use App\Repositories\Contracts\ClienteContatoRepository;
use App\Services\ClienteContatos\AssociarClienteContatoService;
use App\Services\ClienteContatos\Contracts\AssociarClienteContatoService as ContractsAssociarClienteContatoService;
use Illuminate\Support\ServiceProvider;

class ClienteContatoProvider extends ServiceProvider
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
        $service = new AssociarClienteContatoService();
        $service->setClienteContatoRepository(app(ClienteContatoRepository::class));

        $this->app->bind(ContractsAssociarClienteContatoService::class, function($app) use($service){
            return $service;
        });
    }
}
