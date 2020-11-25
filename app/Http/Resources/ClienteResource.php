<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
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
            'id'                    => $this->id,
            'razao_social'          => $this->razao_social,
            'nome_fantasia'         => $this->nome_fantasia,
            'cpf_cnpj'              => $this->cpf_cnpj,
            'inscricao_estadual'    => $this->inscricao_estadual,
            'inscricao_municipal'   => $this->inscricao_municipal,
            'created_at'            => $this->created_at,
            'updated_at'            => $this->updated_at,
        ];
    }
}
