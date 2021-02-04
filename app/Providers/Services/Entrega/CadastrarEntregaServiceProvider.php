<?php

namespace App\Providers\Services\Entrega;

use App\Repositories\Contracts\EntregaRepository;
use App\Services\Entrega\CadastrarEntrega\CadastrarEntregaService;
use App\Services\Entrega\CadastrarEntrega\Contracts\CadastrarEntregaService as ContractsCadastrarEntregaService;
use Illuminate\Support\ServiceProvider;

class CadastrarEntregaServiceProvider extends ServiceProvider
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
        $service = new CadastrarEntregaService();

        $service->setEntregaRepository(app(EntregaRepository::class));

        $this->app->bind(ContractsCadastrarEntregaService::class, function($app) use($service){
            return $service;
        });
    }
}
