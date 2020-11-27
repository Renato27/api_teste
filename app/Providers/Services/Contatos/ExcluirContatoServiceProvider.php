<?php

namespace App\Providers\Services\Contatos;

use App\Repositories\Contracts\ContatoRepository;
use App\Services\Contatos\ExcluirContato\Contracts\ExcluirContatoService as ContractsExcluirContatoService;
use App\Services\Contatos\ExcluirContato\ExcluirContatoService;
use Illuminate\Support\ServiceProvider;

class ExcluirContatoServiceProvider extends ServiceProvider
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
        $service = new ExcluirContatoService();
        $service->setContatoRepository(app(ContatoRepository::class));

        $this->app->bind(ContractsExcluirContatoService::class, function($app) use($service){
            return $service;
        });
    }
}
