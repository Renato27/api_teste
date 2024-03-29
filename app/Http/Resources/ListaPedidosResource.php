<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ListaPedidosResource extends JsonResource
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
            'cliente' => $this->endereco->cliente,
            'estado' => $this->status->nome,
            'data_entrega' => $this->data_entrega,
            'bairro' => $this->endereco->bairro,
            'contato' => $this->contato,
            'estado' => $this->status->nome,
            'valor' => $this->itens->isEmpty() ? 0 : $this->itens[0]->valor,
        ];
    }
}
