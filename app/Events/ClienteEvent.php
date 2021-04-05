<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Events;

use App\Models\Clientes\Cliente;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class ClienteEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Undocumented variable.
     *
     * @var Cliente
     */
    protected Cliente $cliente;

    /**
     * Undocumented variable.
     *
     * @var array
     */
    protected array $endereco;

    /**
     * Undocumented variable.
     *
     * @var array
     */
    protected array $contato;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Cliente $cliente, array $endereco, array $contato)
    {
        $this->cliente = $cliente;
        $this->endereco = $endereco;
        $this->contato = $contato;
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

    public function getCliente()
    {
        return $this->cliente;
    }

    public function getDadosEndereco()
    {
        return $this->endereco;
    }

    public function getDadosContato()
    {
        return $this->contato;
    }
}
