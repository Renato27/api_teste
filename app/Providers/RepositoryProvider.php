<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
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
        $this->app->bind(\App\Repositories\Contracts\ClienteRepository::class, function($app){
            return new \App\Repositories\ClienteRepositoryImplementation(new \App\Models\Clientes\Cliente());
        });

        $this->app->bind(\App\Repositories\Contracts\ClienteContatoRepository::class, function($app){
            return new \App\Repositories\ClienteContatoRepositoryImplementation(new \App\Models\ClienteContato\ClienteContato());
        });

        $this->app->bind(\App\Repositories\Contracts\ClienteContratoRepository::class, function($app){
            return new \App\Repositories\ClienteContratoRepositoryImplementation(new \App\Models\ClienteContrato\ClienteContrato());
        });

        $this->app->bind(\App\Repositories\Contracts\ClienteEnderecoRepository::class, function($app){
            return new \App\Repositories\ClienteEnderecoRepositoryImplementation(new \App\Models\ClienteEndereco\ClienteEndereco());
        });

        $this->app->bind(\App\Repositories\Contracts\ContatoContratoRepository::class, function($app){
            return new \App\Repositories\ContatoContratoRepositoryImplementation(new \App\Models\ContatoContrato\ContatoContrato());
        });
        
    }
}
