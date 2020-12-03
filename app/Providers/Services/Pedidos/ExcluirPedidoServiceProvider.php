<?php

namespace App\Providers\Services\Pedidos;

use App\Repositories\Contracts\PedidoRepository;
use App\Services\Pedidos\ExcluirPedido\Contracts\ExcluirPedidoService as ContractsExcluirPedidoService;
use App\Services\Pedidos\ExcluirPedido\ExcluirPedidoService;
use Illuminate\Support\ServiceProvider;

class ExcluirPedidoServiceProvider extends ServiceProvider
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
        $service = new ExcluirPedidoService();
        $service->setPedidoRepository(app(PedidoRepository::class));

        $this->app->bind(ContractsExcluirPedidoService::class, function($app) use($service){
            return $service;
        });
    }
}
