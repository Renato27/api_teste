<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotaPatrimonioResource extends JsonResource
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
            'periodo_inicio' => $this->periodo_inicio,
            'periodo_fim' => $this->periodo_fim,
            'valor' => $this->valor,
            'numero_patrimonio' => $this->patrimonio->numero_patrimonio,
            'tipo_patrimonio' => $this->patrimonio->tipo_patrimonio->nome,
            'modelo' => $this->patrimonio->modelo->nome,
            'nota' => $this->nota_id,
            'chamado' => $this->chamado_id,
        ];
    }
}
