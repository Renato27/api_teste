<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\RetiradaPatrimonio;

use App\Models\Retirada\Retirada;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RetiradaPatrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['retirada_id', 'patrimonio_id', 'checked'];

    public function retirada()
    {
        return $this->belongsTo(Retirada::class, 'retirada_id');
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }
}
