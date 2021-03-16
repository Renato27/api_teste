<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Listeners;

use App\Models\Contador\Contador;
use App\Models\Retirada\Retirada;
use App\Events\GenericChamadoEvent;
use App\Models\Auditoria\Auditoria;
use App\Models\Corretiva\Corretiva;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Preventiva\Preventiva;
use App\Models\Suprimento\Suprimento;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;
use App\Models\RetiradaPatrimonio\RetiradaPatrimonio;
use App\Models\AuditoriaPatrimonio\AuditoriaPatrimonio;
use App\Models\ContadorPatrimonios\ContadorPatrimonios;
use App\Models\CorretivaPatrimonio\CorretivaPatrimonio;
use App\Models\PreventivaPatrimonio\PreventivaPatrimonio;
use App\Models\SuprimentoPatrimonio\SuprimentoPatrimonio;
use Symfony\Component\HttpKernel\Exception\HttpException;

class GenericChamadoEventRelationShips
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
     * @param  GenericChamadoEvent  $event
     * @return void
     */
    public function handle(GenericChamadoEvent $event)
    {
        if ($event->getModel() instanceof Retirada) {
            RetiradaPatrimonio::create([
                'retirada_id' => $event->getModel()->id,
                'patrimonio_id' => $event->getPatrimonioId(),
            ]);

            $patrimonio = Patrimonio::find($event->getPatrimonioId());
            $patrimonio->estado_patrimonio_id = EstadoPatrimonio::MARCADO_RETIRADA;
            $patrimonio->save();
        } elseif ($event->getModel() instanceof Preventiva) {
            PreventivaPatrimonio::create([
                'preventiva_id' => $event->getModel()->id,
                'patrimonio_id' => $event->getPatrimonioId(),
            ]);
        } elseif ($event->getModel() instanceof Corretiva) {
            CorretivaPatrimonio::create([
                'corretiva_id' => $event->getModel()->id,
                'patrimonio_id' => $event->getPatrimonioId(),
            ]);
        } elseif ($event->getModel() instanceof Auditoria) {
            AuditoriaPatrimonio::create([
                'auditoria_id' => $event->getModel()->id,
                'patrimonio_id' => $event->getPatrimonioId(),
            ]);
        } elseif ($event->getModel() instanceof Suprimento) {
            SuprimentoPatrimonio::create([
                'suprimento_id' => $event->getModel()->id,
                'patrimonio_id' => $event->getPatrimonioId(),
            ]);
        } elseif ($event->getModel() instanceof Contador) {
            ContadorPatrimonios::create([
                'contador_id' => $event->getModel()->id,
                'patrimonio_id' => $event->getPatrimonioId(),
            ]);
        } else {
            throw new HttpException(400, 'Não foi encontrato o tipo de chamado');
        }
    }
}
