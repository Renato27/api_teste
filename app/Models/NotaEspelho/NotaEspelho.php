<?php

namespace App\Models\NotaEspelho;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NotaEspelho extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['data_emissao', 'data_vencimento', 'periodo_inicio', 'periodo_fim', 'valor',
    'nota_espelho_estado_id', 'cliente_id', 'contrato_id', 'pedido_id', 'espelho_recorrente_id'];
}
