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

    private function getDados()
    {

    }
}
