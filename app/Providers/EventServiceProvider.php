<?php

namespace App\Providers;

use App\Events\ClienteEvent;
use App\Events\Entrega as EventsEntrega;
use App\Events\EntregaPatrimonio;
use App\Events\GenericChamadoEvent;
use App\Events\NotaEspelhoPatrimonioEvent;
use App\Events\PedidoItem;
use App\Events\TrocaEvent;
use App\Listeners\CreateNotaEspelhoPatrimonio;
use App\Listeners\GenericChamadoEventRelationShips;
use App\Listeners\RelationShipsClienteCadastro;
use App\Listeners\RelationShipsEntrega;
use App\Listeners\RelationShipsPedidoItem;
use App\Listeners\RelationShipsTroca;
use App\Listeners\UpdateEntregaPatrimonio;
use App\Models\Chamado\Chamado;
use App\Models\Entrega\Entrega;
use App\Models\Pedido\Pedido;
use App\Models\Troca\Troca;
use App\Observers\ChamadoObserver;
use App\Observers\EntregaObserver;
use App\Observers\PedidoObserver;
use App\Observers\TrocaObserver;
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
        EventsEntrega::class => [
            RelationShipsEntrega::class,

        ],
        EntregaPatrimonio::class => [
            UpdateEntregaPatrimonio::class,
        ],

        ClienteEvent::class => [
            RelationShipsClienteCadastro::class,
        ],
        NotaEspelhoPatrimonioEvent::class => [
            CreateNotaEspelhoPatrimonio::class,
        ],
        GenericChamadoEvent::class => [
            GenericChamadoEventRelationShips::class,
        ],
        TrocaEvent::class => [
            RelationShipsTroca::class,
        ],
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
        Chamado::observe(ChamadoObserver::class);
        Troca::observe(TrocaObserver::class);
    }
}
