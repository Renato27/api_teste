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
            'cliente'       => new ClienteResource($this->resource),
            'enderecos'     => EnderecoResource::collection($this->resource->enderecos),
            'contatos'      => ContatoResource::collection($this->resource->contatos),
            'contratos'     => ContratoResource::collection($this->resource->contratos),
        ];
    }
}
