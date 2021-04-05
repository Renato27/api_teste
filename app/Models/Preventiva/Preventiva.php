<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Preventiva;

use App\Models\Chamado\Chamado;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\PreventivaPatrimonio\PreventivaPatrimonio;

class Preventiva extends Model
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
        return $this->hasManyThrough(Patrimonio::class, PreventivaPatrimonio::class, 'preventiva_id', 'id', 'id', 'patrimonio_id');
    }

    public function hasPatrimonios()
    {
        return $this->hasMany(PreventivaPatrimonio::class, 'preventiva_id', 'id');
    }
}
