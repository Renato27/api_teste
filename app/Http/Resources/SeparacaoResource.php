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
            'estado'        => $this->expedicao_estado->nome,
            'itens'         => ItensPedidoResource::collection($this->pedido->itens),
            'entrega_patrimonios' => EntregaPatrimonioResource::collection($this->entrega->entrega_patrimonios),
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,
            'deleted_at'    => $this->deleted_at
        ];
    }
}
