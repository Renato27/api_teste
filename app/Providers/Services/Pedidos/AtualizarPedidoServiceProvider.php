<?php

namespace App\Providers\Services\Pedidos;

use App\Repositories\Contracts\PedidoRepository;
use App\Services\Pedidos\AtualizarPedido\AtualizarPedidoService;
use App\Services\Pedidos\AtualizarPedido\Contracts\AtualizarPedidoService as ContractsAtualizarPedidoService;
use Illuminate\Support\ServiceProvider;

class AtualizarPedidoServiceProvider extends ServiceProvider
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
        $service = new AtualizarPedidoService();
        $service->setPedidoRepository(app(PedidoRepository::class));

        $this->app->bind(ContractsAtualizarPedidoService::class, function($app) use($service){
            return $service;
        });
    }
}
