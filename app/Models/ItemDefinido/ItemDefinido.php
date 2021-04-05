<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\ItemDefinido;

use App\Models\Contratos\Contrato;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoPatrimonio\TipoPatrimonio;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ContratoItemDefinido\ContratoItemDefinido;

class ItemDefinido extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['detalhes', 'valor', 'tipo_patrimonio_id'];

    public function tipo_patrimonio()
    {
        return $this->belongsTo(TipoPatrimonio::class, 'tipo_patrimonio_id');
    }

    public function contrato()
    {
        return $this->hasOneThrough(Contrato::class, ContratoItemDefinido::class, 'item_difinido_id', 'id');
    }
}
