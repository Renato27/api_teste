<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Contatos;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ContatoRepository;
use App\Services\Contatos\ExcluirContato\ExcluirContatoService;
use App\Services\Contatos\ExcluirContato\Contracts\ExcluirContatoService as ContractsExcluirContatoService;

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

        $this->app->bind(ContractsExcluirContatoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
