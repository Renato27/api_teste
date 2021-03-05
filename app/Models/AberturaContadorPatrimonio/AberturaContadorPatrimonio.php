<?php

namespace App\Models\AberturaContadorPatrimonio;

use App\Models\AberturaContador\AberturaContador;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
