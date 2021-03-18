<?php

namespace App\Providers\Services\Nota;

use App\Repositories\Contracts\NotaRepository;
use App\Services\Nota\GerarNota\Contracts\GerarNotaService as ContractsGerarNotaService;
use App\Services\Nota\GerarNota\GerarNotaService;
use Illuminate\Support\ServiceProvider;

class GerarNotaServiceProvider extends ServiceProvider
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
        $service = new GerarNotaService();

        $service->setNotaRepository(app(NotaRepository::class));

        $this->app->bind(ContractsGerarNotaService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
