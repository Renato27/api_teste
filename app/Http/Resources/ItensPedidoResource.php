<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItensPedidoResource extends JsonResource
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
            'valor' => $this->valor,
            'quantidade' => $this->quantidade,
            'informacoes' => $this->informacoes,
            'modelo' => new ModeloResource($this->modelo),
            'item_definido' => new ItemDefinidoResource($this->item_definido),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_td,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
