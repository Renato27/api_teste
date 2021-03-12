<?php

namespace App\Providers\Services\NotaEspelho;

use App\Repositories\Contracts\ContratosRepository;
use App\Repositories\Contracts\NotaEspelhoPatrimonioRepository;
use App\Repositories\Contracts\NotaEspelhoRepository;
use App\Repositories\Contracts\NotaPatrimonioRepository;
use App\Repositories\Contracts\PatrimonioAlugadoRepository;
use App\Services\NotaEspelho\GerarAutomaticoMedicaoNotaEspelho\Contracts\GerarAutomaticoMedicaoNotaEspelhoService as ContractsGerarAutomaticoMedicaoNotaEspelhoService;
use App\Services\NotaEspelho\GerarAutomaticoMedicaoNotaEspelho\GerarAutomaticoMedicaoNotaEspelhoService;
use Illuminate\Support\ServiceProvider;

class GerarAutomaticoMedicaoNotaEspelhoServiceProvider extends ServiceProvider
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
        $service = new GerarAutomaticoMedicaoNotaEspelhoService();

        $service->setNotaEspelhoRepository(app(NotaEspelhoRepository::class))
        ->setNotaEspelhoPatrimonioRepository(app(NotaEspelhoPatrimonioRepository::class))
        ->setPatrimonioAlugadoRepository(app(PatrimonioAlugadoRepository::class))
        ->setNotaPatrimonioRepository(app(NotaPatrimonioRepository::class))
        ->setContratoRepository(app(ContratosRepository::class));

        $this->app->bind(ContractsGerarAutomaticoMedicaoNotaEspelhoService::class, function($app) use($service){
            return $service;
        });
    }
}
