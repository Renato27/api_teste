<?php

namespace App\Models\RetiradaPatrimonio;

use App\Models\Patrimonio\Patrimonio;
use App\Models\Retirada\Retirada;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
