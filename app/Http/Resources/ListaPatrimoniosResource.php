<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ListaPatrimoniosResource extends JsonResource
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
            'numero_patrimonio'     => $this->numero_patrimonio,
            'numero_serie'          => $this->numero_serie,
            'fabricante'            => $this->fabricante->nome,
            'tipo_patrimonio'       => $this->tipo_patrimonio->nome,
            'modelo'                => $this->modelo->nome,
            'estado_patrimonio'     => $this->estado_patrimonio->nome,
            'cliente_id'            => !is_null($this->aluguel) ? $this->aluguel->cliente->id : null,
            'cliente'               => !is_null($this->aluguel) ? $this->aluguel->cliente->nome_fantasia : null,
            'data_entrega'          => !is_null($this->aluguel) ? $this->aluguel->data_entrega : null
        ];
    }
}
