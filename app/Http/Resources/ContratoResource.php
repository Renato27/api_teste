<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContratoResource extends JsonResource
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
            'nome' => $this->nome,
            'inicio' => $this->inicio,
            'fim' => $this->fim,
            'medicao_tipo_id' => $this->medicao_tipo_id,
            'pagamento_metodo_id' => $this->pagamento_metodo_id,
            'contrato_tipo_id' => $this->contrato_tipo_id,
            'detalhes' => $this->detalhes,
            'detalhes_nota' => $this->detalhes_nota,
            'dia_emissao_nota' => $this->dia_emissao_nota,
            'dia_vencimento_nota' => $this->dia_vencimento_nota,
            'dia_periodo_inicio_nota' => $this->dia_periodo_inicio_nota,
            'dia_periodo_fim_nota' => $this->dia_periodo_fim_nota,
            'responsavel' => $this->responsavel,
            'contato' => ContatoResource::collection($this->contatos),
            'itens' => ItemDefinidoResource::collection($this->itens),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
