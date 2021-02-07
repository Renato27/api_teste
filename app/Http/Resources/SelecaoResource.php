<?php

namespace App\Http\Resources;

use App\Models\Patrimonio\Patrimonio;
use Illuminate\Http\Resources\Json\JsonResource;

class SelecaoResource extends JsonResource
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
            'data_abertura' => $this->created_at,
            'itens'         => ItensPedidoResource::collection($this->pedido->itens),
            'patrimonios'   => PatrimonioResource::collection(Patrimonio::where('estado_patrimonio_id', 1)->get()),
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_td,
            'deleted_at'    => $this->deleted_at
        ];
    }
}
