<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ListaExpedicaoSelecaoResource extends JsonResource
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
            'id' => $this->id,
            'pedido' => $this->pedido_id,
            'cliente' => $this->pedido->contrato->cliente,
            'estado' => $this->expedicao_estado->nome,
            'data_abertura' => $this->created_at,
            'entrega' => $this->pedido->data_entrega,
        ];
    }
}
