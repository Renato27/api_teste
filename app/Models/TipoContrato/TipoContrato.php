<?php

namespace App\Models\TipoContrato;

use App\Models\Contratos\Contratos;
use App\Models\ContratoTipo\ContratoTipo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoContrato extends Model
{
    use HasFactory;

    protected $fillable = ['contrato_id', 'contrato_tipo_id'];

    public function contrato()
    {
        return $this->belongsTo(Contratos::class, 'contrato_id');
    }

    public function contrato_tipo()
    {
        return $this->belongsTo(ContratoTipo::class, 'contrato_tipo_id');
    }
}
