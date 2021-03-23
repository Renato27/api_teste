<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Nota;

use App\Models\Clientes\Cliente;
use App\Models\Contratos\Contrato;
use App\Models\NotaEstado\NotaEstado;
use Illuminate\Database\Eloquent\Model;
use App\Models\NotaPatrimonio\NotaPatrimonio;
use App\Models\NotaSerasa\NotaSerasa;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nota extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['data_emissao', 'data_vencimento', 'data_pagamento', 'periodo_inicio', 'periodo_fim', 'descricao', 'valor',
        'antecipacao', 'tem_boleto', 'nota_estado_id', 'cliente_id', 'contrato_id', ];

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

    public function serasa()
    {
        return $this->hasOne(NotaSerasa::class, 'nota_id', 'id');
    }
}
