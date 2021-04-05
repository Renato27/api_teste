<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Chamado\GerarChamado\Abstracts;

use App\Events\TrocaEvent;
use App\Models\Troca\Troca;
use App\Models\Chamado\Chamado;
use App\Models\Suporte\Suporte;
use App\Models\Contador\Contador;
use App\Models\Retirada\Retirada;
use App\Events\GenericChamadoEvent;
use App\Models\Auditoria\Auditoria;
use App\Models\Corretiva\Corretiva;
use App\Models\Preventiva\Preventiva;
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

        if (! $chamadoGerado) {
            return null;
        }

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

            case TipoChamado::SUPORTE:
                 $this->gerarSuporte($chamadoGerado);

                break;

            case TipoChamado::AUDITORIA:
                 $this->gerarAuditoria($chamadoGerado);

                break;

            case TipoChamado::CONTADOR:
                 $this->gerarContador($chamadoGerado);

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

        foreach ($this->patrimonios as $patrimonio) {
            event(new GenericChamadoEvent($retirada, $patrimonio));
        }
    }

    private function gerarPreventiva(Chamado $chamado)
    {
        $preventiva = Preventiva::create(['chamado_id' => $chamado->id]);

        foreach ($this->patrimonios as $patrimonio) {
            event(new GenericChamadoEvent($preventiva, $patrimonio));
        }
    }

    private function gerarCorretiva(Chamado $chamado)
    {
        $corretiva = Corretiva::create([
            'chamado_id' => $chamado->id,
            'login_team_viewer' => $this->dados['login_team_viewer'],
            'senha_team_viewer' => $this->dados['senha_team_viewer'],
        ]);

        foreach ($this->patrimonios as $patrimonio) {
            event(new GenericChamadoEvent($corretiva, $patrimonio));
        }
    }

    private function gerarAuditoria(Chamado $chamado)
    {
        $auditoria = Auditoria::create(['chamado_id' => $chamado->id]);

        foreach ($this->patrimonios as $patrimonio) {
            event(new GenericChamadoEvent($auditoria, $patrimonio));
        }
    }

    private function gerarTroca(Chamado $chamado)
    {
        $troca = Troca::create(['chamado_id' => $chamado->id]);

        foreach ($this->patrimonios as $patrimonio) {
            event(new TrocaEvent($troca, $patrimonio));
        }

        foreach ($this->patrimoniosTrocar as $patrimonioTrocar) {
            event(new TrocaEvent($troca, null, $patrimonioTrocar));
        }
    }

    private function gerarContador(Chamado $chamado)
    {
        $contador = Contador::create(['chamado_id' => $chamado->id]);

        foreach ($this->patrimonios as $patrimonio) {
            event(new GenericChamadoEvent($contador, $patrimonio));
        }
    }

    private function gerarSuporte(Chamado $chamado)
    {
        Suporte::create([
            'chamado_id' => $chamado->id,
            'login_team_viewer' => $this->dados['login_team_viewer'],
            'senha_team_viewer' => $this->dados['senha_team_viewer'],
        ]);
    }

    private function gerarSuprimento(Chamado $chamado)
    {
        $suprimento = Suprimento::create(['chamado_id' => $chamado->id]);

        foreach ($this->patrimonios as $patrimonio) {
            event(new GenericChamadoEvent($suprimento, $patrimonio));
        }
    }
}
