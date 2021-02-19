<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EntregaPatrimonioResource extends JsonResource
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
            'entrega'       => $this->entrega,
            'patrimonio'    => new PatrimonioResource($this->patrimonio),
            'checked'       => $this->checked
        ];
    }
}
