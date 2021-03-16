<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Listeners;

use App\Events\NotaEspelhoPatrimonioEvent;
use App\Models\NotaEspelhoPatrimonio\NotaEspelhoPatrimonio;

class CreateNotaEspelhoPatrimonio
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NotaEspelhoPatrimonioEvent  $event
     * @return void
     */
    public function handle(NotaEspelhoPatrimonioEvent $event)
    {
        NotaEspelhoPatrimonio::create([
            'periodo_inicio' => $event->getNotaEspelho()->periodo_inicio,
            'periodo_fim' => $event->getNotaEspelho()->periodo_fim,
            'valor' => $event->getValor(),
            'patrimonio_id' => $event->getPatrimonioAlugado()->patrimonio_id,
            'nota_espelho_id' => $event->getNotaEspelho()->id,
            'contrato_id' => $event->getNotaEspelho()->contrato_id,
            'chamado_id' => $event->getPatrimonioAlugado()->chamado_id,
        ]);
    }
}
