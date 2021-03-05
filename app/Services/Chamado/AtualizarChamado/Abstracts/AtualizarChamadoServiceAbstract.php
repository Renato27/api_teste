<?php

namespace App\Services\Chamado\AtualizarChamado\Abstracts;

use App\Models\Chamado\Chamado;
use App\Models\TipoChamado\TipoChamado;
use App\Services\Chamado\AtualizarChamado\Base\AtualizarChamadoServiceBase;

abstract class AtualizarChamadoServiceAbstract extends AtualizarChamadoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return boolean
     */
    protected function AtualizarChamado() : ?Chamado
    {
        $chamado = $this->ChamadoRepository->updateChamado($this->Chamado->id, $this->dados);

        switch ($this->Chamado->tipo_chamado_id) {
            case TipoChamado::RETIRADA:
                 $this->gerarRetirada($this->Chamado);
                break;

            case TipoChamado::PREVENTIVA:
                 $this->gerarPreventiva($this->Chamado);
                break;

            case TipoChamado::CORRETIVA:
                 $this->gerarCorretiva($this->Chamado);
                break;

            case TipoChamado::SUPORTE:
                 $this->gerarSuporte($this->Chamado);
                break;

            case TipoChamado::AUDITORIA:
                 $this->gerarAuditoria($this->Chamado);
                break;

            case TipoChamado::CONTADOR:
                 $this->gerarContador($this->Chamado);
                break;

            case TipoChamado::TROCA:
                 $this->gerarTroca($this->Chamado);
                break;

            case TipoChamado::SUPRIMENTO:
                 $this->gerarSuprimento($this->Chamado);
                break;

            default:
                return $this->Chamado;
                break;
        }

        return $chamado;
    }

    private function gerarRetirada(Chamado $chamado)
    {
        $retirada = Retirada::where(['chamado_id' => $chamado->id]);

        foreach($this->patrimonios as $patrimonio){

            event(new GenericChamadoEvent($retirada, $patrimonio));
        }
    }

    private function gerarPreventiva(Chamado $chamado)
    {
        $preventiva = Preventiva::create(['chamado_id' => $chamado->id]);

        foreach($this->patrimonios as $patrimonio){

            event(new GenericChamadoEvent($preventiva, $patrimonio));
        }
    }

    private function gerarCorretiva(Chamado $chamado)
    {
        $corretiva = Corretiva::create([
            'chamado_id' => $chamado->id,
            'login_team_viewer' => $this->dados['login_team_viewer'],
            'senha_team_viewer' => $this->dados['senha_team_viewer']
        ]);

        foreach($this->patrimonios as $patrimonio){

            event(new GenericChamadoEvent($corretiva, $patrimonio));
        }
    }

    private function gerarAuditoria(Chamado $chamado)
    {
        $auditoria = Auditoria::create(['chamado_id' => $chamado->id]);

        foreach($this->patrimonios as $patrimonio){

            event(new GenericChamadoEvent($auditoria, $patrimonio));
        }
    }

    private function gerarTroca(Chamado $chamado)
    {
        $troca = Troca::create(['chamado_id' => $chamado->id]);

        foreach($this->patrimonios as $patrimonio){

            event(new TrocaEvent($troca, $patrimonio));
        }

        foreach($this->patrimoniosTrocar as $patrimonioTrocar){

            event(new TrocaEvent($troca, null, $patrimonioTrocar));
        }
    }

    private function gerarContador(Chamado $chamado)
    {
        $contador = Contador::create(['chamado_id' => $chamado->id]);

        foreach($this->patrimonios as $patrimonio){

            event(new GenericChamadoEvent($contador, $patrimonio));
        }
    }

    private function gerarSuporte(Chamado $chamado)
    {
        Suporte::create([
            'chamado_id' => $chamado->id,
            'login_team_viewer' => $this->dados['login_team_viewer'],
            'senha_team_viewer' => $this->dados['senha_team_viewer']
        ]);
    }

    private function gerarSuprimento(Chamado $chamado)
    {
        $suprimento = Suprimento::create(['chamado_id' => $chamado->id]);

        foreach($this->patrimonios as $patrimonio){

            event(new GenericChamadoEvent($suprimento, $patrimonio));
        }
    }
}
