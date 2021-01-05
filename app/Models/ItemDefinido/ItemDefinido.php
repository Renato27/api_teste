<?php

namespace App\Models\ItemDefinido;

use App\Models\ContratoItemDefinido\ContratoItemDefinido;
use App\Models\Contratos\Contrato;
use App\Models\TipoPatrimonio\TipoPatrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
