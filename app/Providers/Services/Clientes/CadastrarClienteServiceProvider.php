<?php

namespace App\Providers\Services\Clientes;

use App\Repositories\Contracts\ClienteRepository;
use App\Services\ClienteContatos\Contracts\AssociarClienteContatoService;
use App\Services\ClienteEnderecos\Contracts\AssociarClienteEnderecoService;
use App\Services\Clientes\CadastrarCliente\CadastrarClienteService;
use App\Services\Clientes\CadastrarCliente\Contracts\CadastrarClienteService as ContractsCadastrarClienteService;
use App\Services\Contatos\CadastrarContato\Contracts\CadastrarContatoService;
use App\Services\Enderecos\CadastrarEndereco\Contracts\CadastrarEnderecoService;
use Illuminate\Support\ServiceProvider;

class CadastrarClienteServiceProvider extends ServiceProvider
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
        $service = new CadastrarClienteService();

        $service->setClienteRepository(app(ClienteRepository::class));
        $service->setCadastrarContatoService(app(CadastrarContatoService::class));
        $service->setCadastrarEnderecoService(app(CadastrarEnderecoService::class));
        $service->setAssociarClienteContatoService(app(AssociarClienteContatoService::class));
        $service->setAssociarClienteEnderecoService(app(AssociarClienteEnderecoService::class));

        $this->app->bind(ContractsCadastrarClienteService::class, function($app) use($service){
            return $service;
        });
    }
}
