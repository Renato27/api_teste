<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotaEspelhoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                    => $this->id,
            'data_emissao'          => $this->data_emissao,
            'data_vencimento'       => $this->data_vencimento,
            'periodo_inicio'        => $this->periodo_inicio,
            'periodo_fim'           => $this->periodo_fim,
            'valor'                 => $this->valor,
            'nota_espelho_estado'   => $this->nota_espelho_estado->nome,
            'cliente'               => new ClienteResource($this->cliente),
            'contrato'              => new ContratoResource($this->contrato),
        ];
    }
}
