<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FichaResource extends JsonResource
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
            'id' => $this->id,
            'detalhes' => $this->detalhes,
            'funcionario' => new FuncionarioResource($this->funcionario),
            'chamado' => $this->whenLoaded('chamado_id', $this->chamado_id),
        ];
    }
}
