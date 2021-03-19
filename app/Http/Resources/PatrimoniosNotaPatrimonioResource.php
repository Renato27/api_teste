<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatrimoniosNotaPatrimonioResource extends JsonResource
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
            'numero_patrimonio'     => $this->numero_patrimonio,
            'tipo_patrimonio'       => $this->tipo_patrimonio->nome,
            'modelo'                => $this->modelo->nome,
        ];
    }
}
