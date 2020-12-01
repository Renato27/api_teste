<?php

namespace App\Providers\Services\Contatos;

use App\Repositories\Contracts\ContatoRepository;
use App\Services\Contatos\AtualizarContato\AtualizarContatoService;
use App\Services\Contatos\AtualizarContato\Contracts\AtualizarContatoService as ContractsAtualizarContatoService;
use Illuminate\Support\ServiceProvider;

class AtualizarContatoServiceProvider extends ServiceProvider
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
        $service = new AtualizarContatoService();
        $service->setContatoRepository(app(ContatoRepository::class));

        $this->app->bind(ContractsAtualizarContatoService::class, function($app) use($service){
            return $service;
        });
    }
}
