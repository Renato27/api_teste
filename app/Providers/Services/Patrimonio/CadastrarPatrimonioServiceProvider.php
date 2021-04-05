<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Patrimonio;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\PatrimonioRepository;
use App\Services\Patrimonio\CadastrarPatrimonio\CadastrarPatrimonioService;
use App\Services\Patrimonio\CadastrarPatrimonio\Contracts\CadastrarPatrimonioService as ContractsCadastrarPatrimonioService;

class CadastrarPatrimonioServiceProvider extends ServiceProvider
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
        $service = new CadastrarPatrimonioService();

        $service->setPatrimonioRepository(app(PatrimonioRepository::class));

        $this->app->bind(ContractsCadastrarPatrimonioService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
