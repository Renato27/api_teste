<?php

namespace App\Providers\Services\NotaEspelho;

use App\Repositories\Contracts\EspelhoRecorrentePatrimonioRepository;
use App\Repositories\Contracts\EspelhoRecorrenteRepository;
use App\Repositories\Contracts\NotaEspelhoPatrimonioRepository;
use App\Repositories\Contracts\NotaEspelhoRepository;
use App\Repositories\Contracts\NotaPatrimonioRepository;
use App\Repositories\Contracts\PatrimonioAlugadoRepository;
use App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Contracts\GerarAutomaticoNotaEspelhoService as ContractsGerarAutomaticoNotaEspelhoService;
use App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\GerarAutomaticoNotaEspelhoService;
use Illuminate\Support\ServiceProvider;

class GerarAutomaticoNotaEspelhoServiceProvider extends ServiceProvider
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
        $service = new GerarAutomaticoNotaEspelhoService();

        $service->setNotaEspelhoRepository(app(NotaEspelhoRepository::class))
        ->setEspelhoRecorrentePatrimonioRepository(app(EspelhoRecorrentePatrimonioRepository::class))
        ->setEspelhoRecorrenteRepository(app(EspelhoRecorrenteRepository::class))
        ->setNotaEspelhoPatrimonioRepository(app(NotaEspelhoPatrimonioRepository::class))
        ->setPatrimonioAlugadoRepository(app(PatrimonioAlugadoRepository::class))
        ->setNotaPatrimonioRepository(app(NotaPatrimonioRepository::class));

        $this->app->bind(ContractsGerarAutomaticoNotaEspelhoService::class, function($app) use($service){
            return $service;
        });
    }
}
