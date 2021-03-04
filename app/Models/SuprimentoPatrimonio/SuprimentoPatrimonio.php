<?php

namespace App\Models\SuprimentoPatrimonio;

use App\Models\Patrimonio\Patrimonio;
use App\Models\Suprimento\Suprimento;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuprimentoPatrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['suprimento_id', 'patrimonio_id'];

    public function suprimento()
    {
        return $this->belongsTo(Suprimento::class, 'suprimento_id');
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }
}
