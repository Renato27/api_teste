<?php

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
            'id'                                    => $this->id,
            'email'                                 => $this->email,
            'tipo_usuario_id'                       => $this->tipo_usuario_id,
            'funcionario_id'                        => $this->funcionario_id,
            'contato_id'                            => $this->contato_id,
            'cliente_visualizacao_patrimonio_id'    => $this->cliente_visualizacao_patrimonio_id
        ];
    }
}
