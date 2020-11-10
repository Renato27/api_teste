<?php

namespace App\Models\ContratoTipo;

use App\Models\TipoContrato\TipoContrato;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratoTipo extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function hasContratos()
    {
        return $this->hasMany(TipoContrato::class, 'contrato_tipo_id', 'id');
    }
}
