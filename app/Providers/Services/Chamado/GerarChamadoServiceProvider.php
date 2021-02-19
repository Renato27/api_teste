<?php

namespace App\Providers\Services\Chamado;

use App\Repositories\Contracts\ChamadoRepository;
use App\Services\Chamado\GerarChamado\Contracts\GerarChamadoService as ContractsGerarChamadoService;
use App\Services\Chamado\GerarChamado\GerarChamadoService;
use Illuminate\Support\ServiceProvider;

class GerarChamadoServiceProvider extends ServiceProvider
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
        $service = new GerarChamadoService();
        $service->setChamadoRepository(app(ChamadoRepository::class));

        $this->app->bind(ContractsGerarChamadoService::class, function($app) use($service){
            return $service;
        });
    }
}
