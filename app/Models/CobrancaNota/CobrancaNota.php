<?php

namespace App\Models\CobrancaNota;

use App\Models\Cobranca\Cobranca;
use App\Models\Nota\Nota;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
