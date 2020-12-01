<?php

namespace App\Models\TipoContrato;

use App\Models\Contratos\Contrato;
use App\Models\Contratos\Contratos;
use App\Models\ContratoTipo\ContratoTipo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoContrato extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['contrato_id', 'contrato_tipo_id'];

    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'contrato_id');
    }

    public function contrato_tipo()
    {
        return $this->belongsTo(ContratoTipo::class, 'contrato_tipo_id');
    }
}
