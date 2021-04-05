<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\CobrancaNota;

use App\Models\Nota\Nota;
use App\Models\Cobranca\Cobranca;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CobrancaNota extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['cobranca_id', 'nota_id'];

    public function cobranca()
    {
        return $this->belongsTo(Cobranca::class, 'cobranca_id');
    }

    public function nota()
    {
        return $this->belongsTo(Nota::class, 'nota_id');
    }
}
