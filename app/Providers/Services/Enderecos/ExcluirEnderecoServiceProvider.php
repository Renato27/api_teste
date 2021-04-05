<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Enderecos;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\EnderecoRepository;
use App\Services\Enderecos\ExcluirEndereco\ExcluirEnderecoService;
use App\Services\Enderecos\ExcluirEndereco\Contracts\ExcluirEnderecoService as ContractsExcluirEnderecoService;

class ExcluirEnderecoServiceProvider extends ServiceProvider
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
        $service = new ExcluirEnderecoService();
        $service->setEnderecoRepository(app(EnderecoRepository::class));

        $this->app->bind(ContractsExcluirEnderecoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
