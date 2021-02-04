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
            'numero_patrimonio'         => $this->numero_patrimonio,
            'numero_serie'              => $this->numero_serie,
            'modelo'                    => new ModeloResource($this->modelo),
            'tipo_patrimonio'           => new TipoPatrimonioResource($this->tipo_patrimonio),
            'compra_id'                 => new CompraResource($this->compra),
            'fabricante_id'             => new FabricanteResource($this->fabricante),
            'fornecedor_id'             => new FornecedorResource($this->fornecedor),
            'estado_patrimonio_id'      => new EstadoPatrimonioResource($this->estado_patrimonio),
            'created_at'                => $this->created_at,
            'updated_at'                => $this->updated_at,
            'deleted_at'                => $this->deleted_at
        ];
    }
}
