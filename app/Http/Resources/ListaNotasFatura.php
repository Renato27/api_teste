<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ListaNotasFatura extends JsonResource
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
            'id'            => $this->id,
            'cliente'       => $this->cliente->nome_fantasia,
            'estado'        => $this->nota_estado->nome,
            'emissao'       => $this->data_emissao,
            'vencimento'    => $this->data_vencimento,
            'pagamento'     => $this->data_pagamento,
            'valor'         => $this->valor,
        ];
    }
}
