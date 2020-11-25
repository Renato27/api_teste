<?php

namespace App\Providers\Services\Enderecos;

use App\Repositories\Contracts\EnderecoRepository;
use App\Services\Enderecos\CadastrarEndereco\CadastrarEnderecoService;
use App\Services\Enderecos\CadastrarEndereco\Contracts\CadastrarEnderecoService as ContractsCadastrarEnderecoService;
use Illuminate\Support\ServiceProvider;

class CadastrarEnderecoServiceProvider extends ServiceProvider
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
        $service = new CadastrarEnderecoService();
        $service->setEnderecoRepository(app(EnderecoRepository::class));

        $this->app->bind(ContractsCadastrarEnderecoService::class, function($app) use($service){
            return $service;
        });
    }
}
