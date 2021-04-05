<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\Pedidos;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\PedidoRepository;
use App\Services\Pedidos\AtualizarPedido\AtualizarPedidoService;
use App\Services\Pedidos\AtualizarPedido\Contracts\AtualizarPedidoService as ContractsAtualizarPedidoService;

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

        $this->app->bind(ContractsAtualizarPedidoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
