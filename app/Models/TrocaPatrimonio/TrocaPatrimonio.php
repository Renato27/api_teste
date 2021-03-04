<?php

namespace App\Models\TrocaPatrimonio;

use App\Models\Patrimonio\Patrimonio;
use App\Models\Troca\Troca;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrocaPatrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['troca_id', 'patrimonio_entrega_id', 'patrimonio_retirada_id', 'checked'];

    public function troca()
    {
        return $this->belongsTo(Troca::class, 'troca_id');
    }

    public function patrimonio_entrega()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_entrega_id');
    }

    public function patrimonio_retirada()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_retirada_id');
    }
}
