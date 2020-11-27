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
        dd($this->resource->hasContatos);
        return [
            // 'cliente'   => new ClienteResource($this->resource),
            // 'endereco'  => EnderecoResource::collection($this->resource->hasEnderecos->endereco),
            // 'contato'   => ContatoResource::collection($this->resource->hasContatos->endereco)  
        ];
    }
}
