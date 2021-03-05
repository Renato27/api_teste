<?php

namespace App\Models\Troca;

use App\Models\Chamado\Chamado;
use App\Models\Patrimonio\Patrimonio;
use App\Models\TrocaPatrimonio\TrocaPatrimonio;
use App\Models\TrocaPatrimonioRetirada\TrocaPatrimonioRetirada;
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
        return $this->hasManyThrough(Patrimonio::class, TrocaPatrimonio::class, 'troca_id', 'id', 'id', 'patrimonio_id');
    }

    public function patrimonios_retirada()
    {
        return $this->hasManyThrough(Patrimonio::class, TrocaPatrimonioRetirada::class, 'troca_id', 'id', 'id', 'patrimonio_id');
    }

    public function hasPatrimoniosEntrega()
    {
        return $this->hasMany(TrocaPatrimonio::class, 'troca_id', 'id');
    }

    public function hasPatrimoniosRetirada()
    {
        return $this->hasMany(TrocaPatrimonioRetirada::class, 'troca_id', 'id');
    }
}
