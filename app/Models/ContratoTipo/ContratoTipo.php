<?php

namespace App\Models\ContratoTipo;

use App\Models\TipoContrato\TipoContrato;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContratoTipo extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['nome', 'deleted_at'];

    public function hasContratos()
    {
        return $this->hasMany(TipoContrato::class, 'contrato_tipo_id', 'id');
    }
}
