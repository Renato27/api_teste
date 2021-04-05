<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotaResource extends JsonResource
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
            'id' => $this[0]->id,
            'data_emissao' => $this[0]->data_emissao,
            'data_vencimento' => $this[0]->data_vencimento,
            'periodo_inicio' => $this[0]->periodo_inicio,
            'periodo_fim' => $this[0]->periodo_fim,
            'descricao' => $this[0]->descricao,
            'valor' => $this[0]->valor,
            'nota_estado' => $this[0]->nota_estado->nome,
            'cliente' => new ClienteResource($this[0]->cliente),
            'endereco' => $this[1][0]->endereco,
            'telefone' => $this[2]->contato->telefone,
            'contrato' => $this[0]->contrato->nome,
            'patrimonios' => NotaPatrimonioResource::collection($this[0]->patrimonios),
        ];
    }
}
