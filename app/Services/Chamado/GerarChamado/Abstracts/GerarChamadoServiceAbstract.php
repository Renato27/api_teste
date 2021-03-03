<?php

namespace App\Services\Chamado\GerarChamado\Abstracts;

use App\Events\RetiradaEvent;
use App\Models\Chamado\Chamado;
use App\Models\Retirada\Retirada;
use App\Models\StatusChamado\StatusChamado;
use App\Models\TipoChamado\TipoChamado;
use App\Services\Chamado\GerarChamado\Base\GerarChamadoServiceBase;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

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

            case TipoChamado::SUPORTE:
                 $this->gerarSuporte($chamadoGerado);
                break;

            case TipoChamado::TROCA:
                 $this->gerarTroca($chamadoGerado);
                break;

            case TipoChamado::SUPRIMENTO:
                 $this->gerarSuprimento($chamadoGerado);
                break;

            default:
                $th = app(Throwable::class);
                throw new HttpException(400,  $th->getMessage());
                break;
        }

        return $chamadoGerado;
    }

    private function gerarRetirada(Chamado $chamado)
    {
        $retirada = Retirada::create(['chamado_id' => $chamado->id]);

        foreach($this->dados['patrimonios'] as $patrimonio){

            event(new RetiradaEvent($retirada, $patrimonio));
        }
    }

    private function gerarPreventiva(Chamado $chamado)
    {

    }

    private function gerarCorretiva(Chamado $chamado)
    {

    }

    private function gerarAuditoria(Chamado $chamado)
    {

    }

    private function gerarSuporte(Chamado $chamado)
    {

    }

    private function gerarTroca(Chamado $chamado)
    {

    }

    private function gerarSuprimento(Chamado $chamado)
    {

    }
}
