<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\AberturaContadorPatrimonio;

use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\AberturaContador\AberturaContador;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AberturaContadorPatrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['abertura_contador_id', 'patrimonio_id'];

    public function abertura_contador()
    {
        return $this->belongsTo(AberturaContador::class, 'abertura_contador_id');
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }
}
