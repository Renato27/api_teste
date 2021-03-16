<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\PatrimonioAlugado;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\PatrimonioAlugadoRepository;
use App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\GerarPatrimonioAlugadoService;
use App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Contracts\GerarPatrimonioAlugadoService as ContractsGerarPatrimonioAlugadoService;

class GerarPatrimonioAlugadoServiceProvider extends ServiceProvider
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
        $service = new GerarPatrimonioAlugadoService();

        $service->setPatrimonioAlugadoRepository(app(PatrimonioAlugadoRepository::class));

        $this->app->bind(ContractsGerarPatrimonioAlugadoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
