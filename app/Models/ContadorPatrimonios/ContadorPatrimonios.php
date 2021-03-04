<?php

namespace App\Models\ContadorPatrimonios;

use App\Models\Contador\Contador;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContadorPatrimonios extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['contador_id', 'patrimonio_id', 'contador'];

    public function contador()
    {
        return $this->belongsTo(Contador::class, 'contador_id');
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }
}
