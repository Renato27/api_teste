<?php

namespace App\Models\CobrancaEstado;

use App\Models\Cobranca\Cobranca;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CobrancaEstado extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['nome'];

    public function cobrancas()
    {
        return $this->hasMany(Cobranca::class, 'cobranca_estado_id', 'id');
    }
}
