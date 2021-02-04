<?php

namespace App\Http\Resources;

use App\Models\TipoPatrimonio\TipoPatrimonio;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemDefinidoResource extends JsonResource
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
            'id'                    => $this->id,
            'detalhes'              => $this->detalhes,
            'tipo_patrimonio_id'    => new TipoPatrimonioResource($this->tipo_patrimonio),
            'created_at'            => $this->created_at,
            'updated_at'            => $this->updated_td,
            'deleted_at'            => $this->deleted_at
        ];
    }
}
