<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Events;

use Carbon\Carbon;
use Illuminate\Queue\SerializesModels;
use App\Models\NotaEspelho\NotaEspelho;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Services\Automatizacoes\Calculadora\Calculadora;

class NotaEspelhoPatrimonioEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Instância de nota espelho.
     *
     * @var NotaEspelho
     */
    protected NotaEspelho $notaEspelho;

    /**
     * Instância de patrimônio alugado.
     *
     * @var PatrimonioAlugado
     */
    protected PatrimonioAlugado $patrimonioAlugado;

    /**
     * Classe para calcular o período do patrimônio.
     *
     * @var Calculadora
     */
    protected Calculadora $calculadora;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(NotaEspelho $notaEspelho, PatrimonioAlugado $patrimonioAlugado)
    {
        $calculadora = app(Calculadora::class);

        $this->notaEspelho = $notaEspelho;
        $this->patrimonioAlugado = $patrimonioAlugado;
        $this->calculadora = $calculadora;
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

    public function getNotaEspelho()
    {
        return $this->notaEspelho;
    }

    public function getPatrimonioAlugado()
    {
        return $this->patrimonioAlugado;
    }

    public function getValor()
    {
        $inicio = Carbon::parse($this->notaEspelho->periodo_inicio);
        $fim = Carbon::parse($this->notaEspelho->periodo_fim);
        $data_entrega = Carbon::parse($this->patrimonioAlugado->data_entrega);

        return $this->calculadora->handle($inicio, $fim, $data_entrega, $this->patrimonioAlugado->valor);
    }
}
