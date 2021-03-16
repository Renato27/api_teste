<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Suprimento;

use App\Models\Chamado\Chamado;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\SuprimentoPatrimonio\SuprimentoPatrimonio;

class Suprimento extends Model
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
        return $this->hasManyThrough(Patrimonio::class, SuprimentoPatrimonio::class, 'suprimento_id', 'id', 'id', 'patrimonio_id');
    }

    public function hasPatrimonios()
    {
        return $this->hasMany(SuprimentoPatrimonio::class, 'suprimento_id', 'id');
    }
}
