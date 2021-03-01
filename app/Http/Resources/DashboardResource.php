<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DashboardResource extends JsonResource
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
            'id'                => $this->id,
            'status_chamado'    => $this->status_chamado->nome,
            'tipo_chamado'      => $this->tipo_chamado->nome,
            'usuario'           => $this->when(!is_null($this->usuario), new UsuarioResource($this->usuario)),
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
            'deleted_at'        => $this->deleted_at
        ];
    }
}
