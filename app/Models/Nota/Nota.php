<?php

namespace App\Models\Nota;

use App\Models\Clientes\Cliente;
use App\Models\Contratos\Contrato;
use App\Models\NotaEstado\NotaEstado;
use App\Models\NotaPatrimonio\NotaPatrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nota extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['data_emissao', 'data_vencimento', 'data_pagamento', 'periodo_inicio', 'periodo_fim', 'descricao', 'valor',
    'antecipacao', 'tem_boleto', 'nota_estado_id', 'cliente_id', 'contrato_id'];

    public function nota_estado()
    {
        return $this->belongsTo(NotaEstado::class, 'nota_estado_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'contrato_id');
    }

    public function patrimonios()
    {
        return $this->hasMany(NotaPatrimonio::class, 'nota_id', 'id');
    }
}
