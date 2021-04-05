<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers\Services\ItemPedido;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ItemPedidoRepository;
use App\Services\ItemPedido\CadastrarItemPedido\CadastrarItemPedidoService;
use App\Services\ItemPedido\CadastrarItemPedido\Contracts\CadastrarItemPedidoService as ContractsCadastrarItemPedidoService;

class CadastrarItemPedidoServiceProvider extends ServiceProvider
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
        $service = new CadastrarItemPedidoService();

        $service->setItemPedidoRepository(app(ItemPedidoRepository::class));

        $this->app->bind(ContractsCadastrarItemPedidoService::class, function ($app) use ($service) {
            return $service;
        });
    }
}
