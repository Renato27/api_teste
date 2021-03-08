<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LicencaResource extends JsonResource
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
            'email'         => $this->email,
            'quantidade'    => $this->quantidade,
            'tipo_licenca'  => $this->tipo_licenca->nome,
            'patrimonios'   => PatrimonioResource::collection($this->patrimonios)->numero_patrimonio,
            'patrimonios_licenca'   => $this->licenca_patrimonios,
            'created_at'    => $this->created_at
        ];
    }
}
