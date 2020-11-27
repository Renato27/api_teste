<?php

namespace App\Providers\Services\Contatos;

use App\Repositories\Contracts\ContatoRepository;
use App\Services\Contatos\CadastrarContato\CadastrarContatoService;
use App\Services\Contatos\CadastrarContato\Contracts\CadastrarContatoService as ContractsCadastrarContatoService;
use Illuminate\Support\ServiceProvider;

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

        $this->app->bind(ContractsCadastrarContatoService::class, function($app) use($service){
            return $service;
        });
    }
}
