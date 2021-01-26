<?php

namespace App\Providers\Services\Patrimonios;

use App\Repositories\Contracts\PatrimonioRepository;
use App\Services\Patrimonios\teste17Patrimonio\teste17PatrimonioService;
use App\Services\Patrimonios\teste17Patrimonio\Contracts\teste17PatrimonioService as Contractsteste17PatrimonioService;
use Illuminate\Support\ServiceProvider;

class teste17PatrimonioServiceProvider extends ServiceProvider
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
        $service = new teste17PatrimonioService();

        $service->setPatrimonioRepository(app(PatrimonioRepository::class));

        $this->app->bind(Contractsteste17PatrimonioService::class, function($app) use($service){
            return $service;
        });
    }
}
