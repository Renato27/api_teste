<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Entrega;

use App\Models\Chamado\Chamado;
use App\Models\Expedicao\Expedicao;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\EntregaPatrimonio\EntregaPatrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entrega extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['chamado_id', 'expedicao_id'];

    public function chamado()
    {
        return $this->belongsTo(Chamado::class, 'chamado_id');
    }

    public function expedicao()
    {
        return $this->belongsTo(Expedicao::class, 'expedicao_id');
    }

    public function patrimonios()
    {
        return $this->hasManyThrough(Patrimonio::class, EntregaPatrimonio::class, 'entrega_id', 'id', 'id', 'patrimonio_id');
    }

    public function entrega_patrimonios()
    {
        return $this->hasMany(EntregaPatrimonio::class, 'entrega_id', 'id');
    }
}
