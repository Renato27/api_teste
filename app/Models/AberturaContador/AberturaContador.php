<?php

namespace App\Models\AberturaContador;

use App\Models\Contato\Contato;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AberturaContador extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['dia_abertura', 'patrimonio_id', 'contato_id'];

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function contato()
    {
        return $this->belongsTo(Contato::class,'contato_id');
    }
}
