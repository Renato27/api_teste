<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\TipoContrato;

use App\Models\Contratos\Contrato;
use Illuminate\Database\Eloquent\Model;
use App\Models\ContratoTipo\ContratoTipo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
