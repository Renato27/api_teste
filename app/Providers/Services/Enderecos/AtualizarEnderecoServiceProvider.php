<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Enderecos;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\EnderecoRepository;
use App\Services\Enderecos\AtualizarEndereco\AtualizarEnderecoService;
use App\Services\Enderecos\AtualizarEndereco\Contracts\AtualizarEnderecoService as ContractsAtualizarEnderecoService;

class AtualizarEnderecoServiceProvider extends ServiceProvider
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
        $service = new AtualizarEnderecoService();
        $service->setEnderecoRepository(app(EnderecoRepository::class));

        $this->app->bind(ContractsAtualizarEnderecoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
