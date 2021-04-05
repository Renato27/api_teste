<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChamadoResource extends JsonResource
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
            'data_acao' => $this->data_acao,
            'mensagem' => $this->mensagem,
            'status_chamado' => $this->status_chamado->nome,
            'tipo_chamado' => $this->tipo_chamado->nome,
            'usuario' => new UsuarioResource($this->usuario),
            'pedido' => new PedidoResource($this->pedido),
            'contato' => new ContatoResource($this->contato),
            'endereco' => new EnderecoResource($this->endereco),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
