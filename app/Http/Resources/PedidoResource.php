<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PedidoResource extends JsonResource
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
            'data_entrega' => $this->data_entrega,
            'data_retirada' => $this->data_retirada,
            'contato' => new ContatoResource($this->contato),
            'endereco' => new EnderecoResource($this->endereco),
            'cliente' => ! is_null($this->contrato) ? new ClienteResource($this->contrato->cliente) : null,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
