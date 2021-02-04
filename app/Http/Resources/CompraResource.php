<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompraResource extends JsonResource
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
            'id'                        => $this->id,
            'numero_orcamento'          => $this->numero_orcamento,
            'produto'                   => $this->produto,
            'nota_fiscal'               => $this->nota_fiscal,
            'forma_pagamento'           => $this->forma_pagamento,
            'serie'                     => $this->serie,
            'observacao'                => $this->observacao,
            'quantidade'                => $this->quantidade,
            'valor_unitario'            => $this->valor_unitario,
            'valor_total'               => $this->valor_total,
            'data_compra'               => $this->data_compra,
            'prazo_entrega'             => $this->prazo_entrega,
            'data_entrega'              => $this->data_entrega,
            'data_termino_garantia'     => $this->data_termino_garantia,
            'data_vencimento_fatura'    => $this->data_vencimento_fatura,
            'created_at'                => $this->created_at,
            'updated_at'                => $this->updated_td,
            'deleted_at'                => $this->deleted_at
        ];
    }
}
