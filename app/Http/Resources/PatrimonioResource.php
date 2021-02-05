<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatrimonioResource extends JsonResource
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
            'id'                        => $this->id,
            'numero_patrimonio'         => $this->numero_patrimonio,
            'numero_serie'              => $this->numero_serie,
            'modelo'                    => new ModeloResource($this->modelo),
            'tipo_patrimonio'           => new TipoPatrimonioResource($this->tipo_patrimonio),
            'compra_id'                 => new CompraResource($this->compra),
            'fabricante'                => new FabricanteResource($this->fabricante),
            'fornecedor'                => new FornecedorResource($this->fornecedor),
            'estado_patrimonio'         => new EstadoPatrimonioResource($this->estado_patrimonio),
            'created_at'                => $this->created_at,
            'updated_at'                => $this->updated_at,
            'deleted_at'                => $this->deleted_at
        ];
    }
}
