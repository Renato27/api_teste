<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Pedidos;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\PedidoRepository;
use App\Services\Pedidos\ExcluirPedido\ExcluirPedidoService;
use App\Services\Pedidos\ExcluirPedido\Contracts\ExcluirPedidoService as ContractsExcluirPedidoService;

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

        $this->app->bind(ContractsExcluirPedidoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
