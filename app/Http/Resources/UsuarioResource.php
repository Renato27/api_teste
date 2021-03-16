<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
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
            'email' => $this->email,
            'tipo_usuario_id' => new TipoUsuarioResource($this->tipo_usuario),
            'funcionario_id' => new FuncionarioResource($this->funcionario),
            'contato_id' => new ContatoResource($this->contato),
            'cliente_visualizacao_patrimonio_id' => $this->cliente_visualizacao_patrimonio_id,
        ];
    }
}
