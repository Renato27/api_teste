<?php

namespace App\Providers\Services\Enderecos;

use App\Repositories\Contracts\EnderecoRepository;
use App\Services\Enderecos\AtualizarEndereco\AtualizarEnderecoService;
use App\Services\Enderecos\AtualizarEndereco\Contracts\AtualizarEnderecoService as ContractsAtualizarEnderecoService;
use Illuminate\Support\ServiceProvider;

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

        $this->app->bind(ContractsAtualizarEnderecoService::class, function($app) use($service){
            return $service;
        });
    }
}
