<?php

namespace App\Services\Chamado\AtualizarChamado\Abstracts;

use App\Models\Troca\Troca;
use App\Models\Chamado\Chamado;
use App\Models\Suporte\Suporte;
use App\Models\Contador\Contador;
use App\Models\Retirada\Retirada;
use App\Models\Auditoria\Auditoria;
use App\Models\Corretiva\Corretiva;
use App\Models\Preventiva\Preventiva;
use App\Models\Suprimento\Suprimento;
use App\Models\TipoChamado\TipoChamado;
use App\Events\GenericUpdateChamadoEvent;
use App\Models\ContadorPatrimonios\ContadorPatrimonios;
use App\Models\Entrega\Entrega;
use App\Models\SuporteInteracao\SuporteInteracao;
use App\Services\Chamado\AtualizarChamado\Base\AtualizarChamadoServiceBase;

abstract class AtualizarChamadoServiceAbstract extends AtualizarChamadoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return Chamado|null
     */
    protected function AtualizarChamado() : ?Chamado
    {
        $chamado = $this->ChamadoRepository->updateChamado($this->Chamado->id, $this->dados);

        if(is_null($this->patrimonio_retirar) && is_null($this->patrimonio_adicionar) && is_null($this->dadosInteracoes)) return $chamado;

        switch ($this->Chamado->tipo_chamado_id) {
            case TipoChamado::RETIRADA:
                 $this->atualizarRetirada($this->Chamado);
                break;

            case TipoChamado::PREVENTIVA:
                 $this->atualizarPreventiva($this->Chamado);
                break;

            case TipoChamado::CORRETIVA:
                 $this->atualizarCorretiva($this->Chamado);
                break;

            case TipoChamado::SUPORTE:
                 $this->atualizarSuporte($this->Chamado);
                break;

            case TipoChamado::AUDITORIA:
                 $this->atualizarAuditoria($this->Chamado);
                break;

            case TipoChamado::CONTADOR:
                 $this->atualizarContador($this->Chamado);
                break;

            case TipoChamado::TROCA:
                 $this->atualizarTroca($this->Chamado);
                break;

            case TipoChamado::SUPRIMENTO:
                 $this->atualizarSuprimento($this->Chamado);
                break;

            case TipoChamado::ENTREGA:
                 $this->atualizarEntrega($this->Chamado);
                break;

            default:
                return $chamado;
                break;
        }

        return $chamado;
    }

    private function atualizarRetirada(Chamado $chamado)
    {
        $entrega = Retirada::where(['chamado_id' => $chamado->id])->first();

        event(new GenericUpdateChamadoEvent($entrega, $this->patrimonio_adicionar, $this->patrimonio_retirar));

    }

    private function atualizarEntrega(Chamado $chamado)
    {
        $retirada = Entrega::where(['chamado_id' => $chamado->id])->first();

        event(new GenericUpdateChamadoEvent($retirada, $this->patrimonio_adicionar, $this->patrimonio_retirar));

    }

    private function atualizarPreventiva(Chamado $chamado)
    {
        $preventiva = Preventiva::where(['chamado_id' => $chamado->id])->first();

        event(new GenericUpdateChamadoEvent($preventiva, $this->patrimonio_adicionar, $this->patrimonio_retirar));
    }

    private function atualizarCorretiva(Chamado $chamado)
    {
        $corretiva = Corretiva::where(['chamado_id' => $chamado->id,])->first();

        event(new GenericUpdateChamadoEvent($corretiva, $this->patrimonio_adicionar, $this->patrimonio_retirar));
    }

    private function atualizarAuditoria(Chamado $chamado)
    {
        $auditoria = Auditoria::where(['chamado_id' => $chamado->id])->first();

        event(new GenericUpdateChamadoEvent($auditoria, $this->patrimonio_adicionar, $this->patrimonio_retirar));
    }

    private function atualizarTroca(Chamado $chamado)
    {
        $troca = Troca::where(['chamado_id' => $chamado->id])->first();

        event(new GenericUpdateChamadoEvent($troca, $this->patrimonio_adicionar, $this->patrimonio_retirar));
    }

    private function atualizarContador(Chamado $chamado)
    {
        $contador = Contador::where(['chamado_id' => $chamado->id])->first();

        $contador_patrimonio = ContadorPatrimonios::where(['contador_id' => $contador->id, 'patrimonio_id' => $this->dadosContador['patrimonio_id']])->first();

        $contador_patrimonio->contador = $this->dadosContador['novo_contador'];
        $contador_patrimonio->save();
    }

    private function atualizarSuporte(Chamado $chamado)
    {
        $suporte = Suporte::where(['chamado_id' => $chamado->id]);

        SuporteInteracao::create([
            "inicio"        => $this->dadosInteracoes['inicio'],
            "fim"           => $this->dadosInteracoes['fim'],
            "detalhes"      => $this->dadosInteracoes['detalhes'],
            "suporte_id"    => $suporte->id,
            "usuario_id"    => $this->dadosInteracoes['usuario_id']
        ]);
    }

    private function atualizarSuprimento(Chamado $chamado)
    {
        $suprimento = Suprimento::where(['chamado_id' => $chamado->id]);

        event(new GenericUpdateChamadoEvent($suprimento, $this->patrimonio_adicionar, $this->patrimonio_retirar));
    }
}
