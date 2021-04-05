<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Contatos;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ContatoRepository;
use App\Repositories\Contracts\ContatoEmailRepository;
use App\Services\Contatos\CadastrarContato\CadastrarContatoService;
use App\Services\Contatos\CadastrarContato\Contracts\CadastrarContatoService as ContractsCadastrarContatoService;

class CadastrarContatoServiceProvider extends ServiceProvider
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
        $service = new CadastrarContatoService();
        $service->setContatoRepository(app(ContatoRepository::class));
        $service->setContatoEmailRepository(app(ContatoEmailRepository::class));

        $this->app->bind(ContractsCadastrarContatoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
