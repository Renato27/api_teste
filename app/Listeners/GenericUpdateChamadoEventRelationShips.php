<?php

namespace App\Listeners;

use App\Models\Contador\Contador;
use App\Models\Retirada\Retirada;
use App\Models\Auditoria\Auditoria;
use App\Models\Corretiva\Corretiva;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Preventiva\Preventiva;
use App\Models\Suprimento\Suprimento;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\GenericUpdateChamadoEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;
use App\Models\RetiradaPatrimonio\RetiradaPatrimonio;
use App\Models\AuditoriaPatrimonio\AuditoriaPatrimonio;
use App\Models\ContadorPatrimonios\ContadorPatrimonios;
use App\Models\CorretivaPatrimonio\CorretivaPatrimonio;
use App\Models\Entrega\Entrega;
use App\Models\EntregaPatrimonio\EntregaPatrimonio;
use App\Models\PreventivaPatrimonio\PreventivaPatrimonio;
use App\Models\SuprimentoPatrimonio\SuprimentoPatrimonio;
use Symfony\Component\HttpKernel\Exception\HttpException;

class GenericUpdateChamadoEventRelationShips
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
     * @param  GenericUpdateChamadoEvent  $event
     * @return void
     */
    public function handle(GenericUpdateChamadoEvent $event)
    {
        if($event->getModel() instanceof Retirada){

            $retirada_patrimonio = RetiradaPatrimonio::where([
                "retirada_id" => $event->getModel()->id,
                "patrimonio_id" => $event->getPatrimonioRetirarId()
            ])->first();

            $patrimonio = Patrimonio::find($event->getPatrimonioRetirarId());
            $patrimonio->estado_patrimonio_id = EstadoPatrimonio::Alugado;
            $patrimonio->save();

            $retirada_patrimonio->delete();

            RetiradaPatrimonio::create([
                "retirada_id" => $event->getModel()->id,
                "patrimonio_id" => $event->getPatrimonioAdicionarId()
            ]);

            $patrimonio = Patrimonio::find($event->getPatrimonioAdicionarId());
            $patrimonio->estado_patrimonio_id = EstadoPatrimonio::MARCADO_RETIRADA;
            $patrimonio->save();

        }else if($event->getModel() instanceof Entrega){

            $entrega_patrimonio = EntregaPatrimonio::where([
                "entrega_id" => $event->getModel()->id,
                "patrimonio_id" => $event->getPatrimonioRetirarId()
            ])->first();

            $patrimonio = Patrimonio::find($event->getPatrimonioRetirarId());
            $patrimonio->estado_patrimonio_id = EstadoPatrimonio::DISPONIVEL;
            $patrimonio->save();

            $entrega_patrimonio->delete();

            EntregaPatrimonio::create([
                "entrega_id" => $event->getModel()->id,
                "patrimonio_id" => $event->getPatrimonioAdicionarId()
            ]);

            $patrimonio = Patrimonio::find($event->getPatrimonioAdicionarId());
            $patrimonio->estado_patrimonio_id = EstadoPatrimonio::MARCADO_ENTREGA;
            $patrimonio->save();

        }else if($event->getModel() instanceof Preventiva){
            $preventiva_patrimonio = PreventivaPatrimonio::where([
                "preventiva_id" => $event->getModel()->id,
                "patrimonio_id" => $event->getPatrimonioRetirarId()
            ])->first();

            $preventiva_patrimonio->delete();

            PreventivaPatrimonio::create([
                "preventiva_id" => $event->getModel()->id,
                "patrimonio_id" => $event->getPatrimonioAdicionarId()
            ]);

        }else if($event->getModel() instanceof Corretiva){
            $corretiva_patrimonio = CorretivaPatrimonio::where([
                "corretiva_id" => $event->getModel()->id,
                "patrimonio_id" => $event->getPatrimonioRetirarId()
            ])->first();

            $corretiva_patrimonio->delete();

            CorretivaPatrimonio::create([
                "corretiva_id" => $event->getModel()->id,
                "patrimonio_id" => $event->getPatrimonioAdicionarId()
            ]);

        }else if($event->getModel() instanceof Auditoria){
            $auditoria_patrimonio = AuditoriaPatrimonio::where([
                "auditoria_id" => $event->getModel()->id,
                "patrimonio_id" => $event->getPatrimonioRetirarId()
            ])->first();

            $auditoria_patrimonio->delete();

            AuditoriaPatrimonio::create([
                "auditoria_id" => $event->getModel()->id,
                "patrimonio_id" => $event->getPatrimonioAdicionarId()
            ]);


        }else if($event->getModel() instanceof Suprimento){
            $suprimento_patrimonio = SuprimentoPatrimonio::where([
                "suprimento_id" => $event->getModel()->id,
                "patrimonio_id" => $event->getPatrimonioRetirarId()
            ])->first();

            $suprimento_patrimonio->delete();

            SuprimentoPatrimonio::create([
                "suprimento_id" => $event->getModel()->id,
                "patrimonio_id" => $event->getPatrimonioAdicionarId()
            ]);

        }else{

            throw new HttpException(400,  'Não foi possível encontrato o tipo de chamado');
        }
    }
}
