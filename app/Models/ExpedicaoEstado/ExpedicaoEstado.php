<?php

namespace App\Models\ExpedicaoEstado;

use App\Models\Expedicao\Expedicao;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpedicaoEstado extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome'];

    public function expedicoes()
    {
        return $this->hasMany(Expedicao::class, 'expedicao_estado_id');
    }
}
