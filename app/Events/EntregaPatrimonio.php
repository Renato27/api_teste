<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Events;

use App\Models\Entrega\Entrega;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class EntregaPatrimonio
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Model de entrega.
     *
     * @var Entrega
     */
    private Entrega $entrega;

    /**
     * ID do Patrimônio.
     *
     * @var int
     */
    private int $patrimonio;

    /**
     * Undocumented variable.
     *
     * @var bool|null
     */
    private ?bool $checked;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Entrega $entrega, int $patrimonio, ?bool $checked = false)
    {
        $this->entrega = $entrega;
        $this->patrimonio = $patrimonio;
        $this->checked = $checked;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }

    public function getEntrega()
    {
        return $this->entrega;
    }

    public function getPatrimonioId()
    {
        return $this->patrimonio;
    }

    public function checked()
    {
        return $this->checked;
    }
}
