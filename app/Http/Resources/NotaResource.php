<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotaResource extends JsonResource
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
            'id'                => $this->id,
            'data_emissao'      => $this->data_emissao,
            'data_vencimento'   => $this->data_vencimento,
            'periodo_inicio'    => $this->periodo_inicio,
            'periodo_fim'       => $this->periodo_fim,
            'descricao'         => $this->descricao,
            'valor'             => $this->valor,
            'nota_estado'       => $this->nota_estado->nome,
            'cliente'           => new ClienteResource($this->cliente),
            'contrato'          => $this->contrato->nome,
            'patrimonios'       => NotaPatrimonioResource::collection($this->patrimonios)
        ];
    }
}
