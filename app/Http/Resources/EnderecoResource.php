<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EnderecoResource extends JsonResource
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
            'rua'           => $this->rua,
            'numero'        => $this->numero,
            'bairro'        => $this->bairro,
            'complemento'   => $this->complemento,
            'cidade'        => $this->cidade,
            'estado'        => $this->estado,
            'cep'           => $this->cep,
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at
        ];
    }
}
