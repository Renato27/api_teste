<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Entrega;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\EntregaRepository;
use App\Services\Entrega\CadastrarEntrega\CadastrarEntregaService;
use App\Services\Entrega\CadastrarEntrega\Contracts\CadastrarEntregaService as ContractsCadastrarEntregaService;

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

        $this->app->bind(ContractsCadastrarEntregaService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
