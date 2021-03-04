<?php

namespace App\Listeners;

use App\Events\GenericChamadoEvent;
use App\Models\Auditoria\Auditoria;
use App\Models\AuditoriaPatrimonio\AuditoriaPatrimonio;
use App\Models\Corretiva\Corretiva;
use App\Models\CorretivaPatrimonio\CorretivaPatrimonio;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Preventiva\Preventiva;
use App\Models\PreventivaPatrimonio\PreventivaPatrimonio;
use App\Models\Retirada\Retirada;
use App\Models\RetiradaPatrimonio\RetiradaPatrimonio;
use App\Models\Suprimento\Suprimento;
use App\Models\SuprimentoPatrimonio\SuprimentoPatrimonio;
use App\Models\Troca\Troca;
use App\Models\TrocaPatrimonio\TrocaPatrimonio;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

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

        if($event->getModel() instanceof Retirada){

            RetiradaPatrimonio::create([
                "retirada_id" => $event->getModel()->id,
                "patrimonio_id" => $event->getPatrimonioId()
            ]);

            $patrimonio = Patrimonio::find($event->getPatrimonioId());
            $patrimonio->estado_patrimonio_id = EstadoPatrimonio::MARCADO_RETIRADA;
            $patrimonio->save();



        }else if($event->getModel() instanceof Preventiva){
            PreventivaPatrimonio::create([
                "preventiva_id" => $event->getModel()->id,
                "patrimonio_id" => $event->getPatrimonioId()
            ]);


        }else if($event->getModel() instanceof Corretiva){
             CorretivaPatrimonio::create([
                 "corretiva_id"   => $event->getModel()->id,
                 "patrimonio_id"  => $event->getPatrimonioId()
             ]);


        }else if($event->getModel() instanceof Auditoria){
             AuditoriaPatrimonio::create([
                "auditoria_id"   => $event->getModel()->id,
                "patrimonio_id"  => $event->getPatrimonioId()
             ]);


        }else if($event->getModel() instanceof Suprimento){
            SuprimentoPatrimonio::create([
                "suprimento_id"   => $event->getModel()->id,
                "patrimonio_id"  => $event->getPatrimonioId()
             ]);

        }else{

            throw new HttpException(400,  'Não foi possível encontrato o tipo de chamado');
        }
    }
}
