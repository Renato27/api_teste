<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClienteContatoEnderecoResource extends JsonResource
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
            'cliente'   => new ClienteResource($this->resource),
            'endereco'  => EnderecoResource::collection($this->whenLoaded('cliente_enderecos')),
            'contato'   => ContatoResource::collection($this->whenLoaded('cliente_contatos'))
        ];
    }
}
