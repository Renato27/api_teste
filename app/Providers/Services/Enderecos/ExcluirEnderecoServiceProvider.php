<?php

namespace App\Providers\Services\Enderecos;

use App\Repositories\Contracts\EnderecoRepository;
use App\Services\Enderecos\ExcluirEndereco\Contracts\ExcluirEnderecoService as ContractsExcluirEnderecoService;
use App\Services\Enderecos\ExcluirEndereco\ExcluirEnderecoService;
use Illuminate\Support\ServiceProvider;

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

        $this->app->bind(ContractsExcluirEnderecoService::class, function($app) use($service){
            return $service;
        });
    }
}
