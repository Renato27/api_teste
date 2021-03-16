<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Contatos;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ContatoRepository;
use App\Services\Contatos\AtualizarContato\AtualizarContatoService;
use App\Services\Contatos\AtualizarContato\Contracts\AtualizarContatoService as ContractsAtualizarContatoService;

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

        $this->app->bind(ContractsAtualizarContatoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
