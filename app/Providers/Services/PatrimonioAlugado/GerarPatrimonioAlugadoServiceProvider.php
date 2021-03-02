<?php

namespace App\Providers\Services\PatrimonioAlugado;

use App\Repositories\Contracts\PatrimonioAlugadoRepository;
use App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Contracts\GerarPatrimonioAlugadoService as ContractsGerarPatrimonioAlugadoService;
use App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\GerarPatrimonioAlugadoService;
use Illuminate\Support\ServiceProvider;

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

        $this->app->bind(ContractsGerarPatrimonioAlugadoService::class, function($app) use($service){
            return $service;
        });
    }
}
