<?php

namespace App\Models\Compra;

use App\Models\Fornecedor\Fornecedor;
use App\Models\FornecedorCompra\FornecedorCompra;
use App\Models\Transportadora\Transportadora;
use App\Models\TransportadoraCompra\TransportadoraCompra;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compra extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['numero_orcamento', 'produto', 'nota_fiscal', 'forma_pagamento', 'serie', 'observacao', 'quantidade',
    'valor_unitario', 'valor_total', 'data_compra', 'prazo_entrega', 'data_entrega', 'data_termino_garantia', 'data_vencimento_fatura'];

    public function fornecedor()
    {
        return $this->hasOneThrough(Fornecedor::class, FornecedorCompra::class, 'compra_id', 'id');
    }

    public function transportadora()
    {
        return $this->hasOneThrough(Transportadora::class, TransportadoraCompra::class, 'compra_id', 'id');
    }
}
