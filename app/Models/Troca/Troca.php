<?php

namespace App\Models\Troca;

use App\Models\Chamado\Chamado;
use App\Models\Patrimonio\Patrimonio;
use App\Models\TrocaPatrimonio\TrocaPatrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Troca extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['chamado_id'];

    public function chamado()
    {
        return $this->belongsTo(Chamado::class, 'chamado_id');
    }

    public function patrimonios_entrega()
    {
        return $this->hasManyThrough(Patrimonio::class, TrocaPatrimonio::class, 'troca_id', 'id', 'id', 'patrimonio_entrega_id');
    }

    public function patrimonios_retirada()
    {
        return $this->hasManyThrough(Patrimonio::class, TrocaPatrimonio::class, 'troca_id', 'id', 'id', 'patrimonio_retirada_id');
    }

    public function hasPatrimonios()
    {
        return $this->hasMany(TrocaPatrimonio::class, 'troca_id', 'id');
    }
}
