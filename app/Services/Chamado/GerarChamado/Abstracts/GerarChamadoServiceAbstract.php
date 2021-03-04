<?php

namespace App\Services\Chamado\GerarChamado\Abstracts;

use App\Events\GenericChamadoEvent;
use App\Models\Auditoria\Auditoria;
use App\Models\Chamado\Chamado;
use App\Models\Corretiva\Corretiva;
use App\Models\Preventiva\Preventiva;
use App\Models\Retirada\Retirada;
use App\Models\Suprimento\Suprimento;
use App\Models\TipoChamado\TipoChamado;
use App\Services\Chamado\GerarChamado\Base\GerarChamadoServiceBase;


abstract class GerarChamadoServiceAbstract extends GerarChamadoServiceBase
{
    /**
     * Implementação do código.
     *
     * @return Chamado|null
     */
    protected function GerarChamado() : ?Chamado
    {
        $chamadoGerado = $this->ChamadoRepository->createChamado($this->dados);

        if(!$chamadoGerado) return null;

        switch ($chamadoGerado->tipo_chamado_id) {
            case TipoChamado::RETIRADA:
                 $this->gerarRetirada($chamadoGerado);
                break;

            case TipoChamado::PREVENTIVA:
                 $this->gerarPreventiva($chamadoGerado);
                break;

            case TipoChamado::CORRETIVA:
                 $this->gerarCorretiva($chamadoGerado);
                break;

            case TipoChamado::AUDITORIA:
                 $this->gerarAuditoria($chamadoGerado);
                break;

            case TipoChamado::TROCA:
                 $this->gerarTroca($chamadoGerado);
                break;

            case TipoChamado::SUPRIMENTO:
                 $this->gerarSuprimento($chamadoGerado);
                break;

            default:
                return $chamadoGerado;
                break;
        }

        return $chamadoGerado;
    }

    private function gerarRetirada(Chamado $chamado)
    {
        $retirada = Retirada::create(['chamado_id' => $chamado->id]);

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
        $corretiva = Corretiva::create(['chamado_id' => $chamado->id]);

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

    }

    private function gerarSuprimento(Chamado $chamado)
    {
        $suprimento = Suprimento::create(['chamado_id' => $chamado->id]);

        foreach($this->patrimonios as $patrimonio){

            event(new GenericChamadoEvent($suprimento, $patrimonio));
        }
    }
}
