<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SeparacaoResource extends JsonResource
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
            'id'            => $this->id,
            'pedido'        => new PedidoResource($this->pedido),
            'cliente'       => new ClienteResource($this->pedido->contrato->cliente),
            'estado'        => $this->expedicao_estado->nome,
            'patrimonios'   => PatrimonioResource::collection($this->entrega->patrimonios),
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,
            'deleted_at'    => $this->deleted_at
        ];
    }
}
