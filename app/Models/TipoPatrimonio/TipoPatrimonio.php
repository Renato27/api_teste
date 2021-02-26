<?php

namespace App\Models\TipoPatrimonio;

use App\Models\Modelo\Modelo;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoPatrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['nome'];

    public function patrimonios()
    {
        return $this->hasMany(Patrimonio::class, 'tipo_patrimonio_id', 'id');
    }

    public function modelos()
    {
        return $this->hasMany(Modelo::class, 'tipo_patrimonio_id', 'id');
    }
}
