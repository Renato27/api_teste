<?php

namespace App\Providers;

use App\Events\EntregaPatrimonio;
use App\Events\PedidoItem;
use App\Listeners\RelationShipsEntrega;
use App\Listeners\RelationShipsPedidoItem;
use App\Listeners\UpdateEntregaPatrimonio;
use App\Models\Entrega\Entrega;
use App\Models\Pedido\Pedido;
use App\Observers\EntregaObserver;
use App\Observers\PedidoObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        PedidoItem::class => [
            RelationShipsPedidoItem::class,
        ],
        Entrega::class => [
            RelationShipsEntrega::class,

        ],
        EntregaPatrimonio::class => [
            UpdateEntregaPatrimonio::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Pedido::observe(PedidoObserver::class);
        Entrega::observe(EntregaObserver::class);
    }
}
