<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Modelo;

use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoPatrimonio\TipoPatrimonio;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Modelo extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome', 'tipo_patrimonio_id'];

    public function patrimonios()
    {
        return $this->hasMany(Patrimonio::class, 'modelo_id', 'id');
    }

    public function tipo_patrimonio()
    {
        return $this->belongsTo(TipoPatrimonio::class, 'tipo_patrimonio_id');
    }
}
