<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Providers;

use App\Events\PedidoItem;
use App\Events\TrocaEvent;
use App\Models\Troca\Troca;
use App\Events\ClienteEvent;
use App\Models\Pedido\Pedido;
use App\Models\Chamado\Chamado;
use App\Models\Entrega\Entrega;
use App\Observers\TrocaObserver;
use App\Events\EntregaPatrimonio;
use App\Observers\PedidoObserver;
use App\Observers\ChamadoObserver;
use App\Observers\EntregaObserver;
use App\Events\GenericChamadoEvent;
use App\Listeners\RelationShipsTroca;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Listeners\RelationShipsEntrega;
use App\Events\Entrega as EventsEntrega;
use App\Events\NotaEspelhoPatrimonioEvent;
use App\Listeners\RelationShipsPedidoItem;
use App\Listeners\UpdateEntregaPatrimonio;
use App\Listeners\CreateNotaEspelhoPatrimonio;
use App\Listeners\RelationShipsClienteCadastro;
use App\Listeners\GenericChamadoEventRelationShips;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

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
