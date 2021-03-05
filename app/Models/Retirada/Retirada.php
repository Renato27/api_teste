<?php

namespace App\Models\Retirada;

use App\Models\Chamado\Chamado;
use App\Models\Patrimonio\Patrimonio;
use App\Models\RetiradaPatrimonio\RetiradaPatrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Retirada extends Model
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
        return $this->hasManyThrough(Patrimonio::class, RetiradaPatrimonio::class, 'retirada_id', 'id', 'id', 'patrimonio_id');
    }

    public function retirada_patrimonios()
    {
        return $this->hasMany(RetiradaPatrimonio::class, 'retirada_id', 'id');
    }
}
