<?php

namespace App\Providers\Services\Pedidos;

use App\Repositories\Contracts\PedidoRepository;
use App\Services\Pedidos\CadastrarPedido\CadastrarPedidoService;
use App\Services\Pedidos\CadastrarPedido\Contracts\CadastrarPedidoService as ContractsCadastrarPedidoService;
use Illuminate\Support\ServiceProvider;

class CadastrarPedidoServiceProvider extends ServiceProvider
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
        $service = new CadastrarPedidoService();
        $service->setPedidoRepository(app(PedidoRepository::class));

        $this->app->bind(ContractsCadastrarPedidoService::class, function($app) use($service){
            return $service;
        });
    }
}
