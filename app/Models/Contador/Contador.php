<?php

namespace App\Models\Contador;

use App\Models\Chamado\Chamado;
use App\Models\ContadorPatrimonios\ContadorPatrimonios;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contador extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['chamado_id'];

    public function chamado()
    {
        return $this->belongsTo(Chamado::class, 'chamado_id');
    }

    public function patrimonios()
    {
        return $this->hasManyThrough(Patrimonio::class, ContadorPatrimonios::class, 'contador_id', 'id', 'id', 'patrimonio_id');
    }

    public function hasPatirmonios()
    {
        return $this->hasMany(ContadorPatrimonios::class, 'contador_id', 'id');
    }
}
