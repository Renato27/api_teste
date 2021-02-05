<?php

namespace App\Models\NotaEstado;

use App\Models\Nota\Nota;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NotaEstado extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['nome'];

    public function notas()
    {
        return $this->hasMany(Nota::class, 'nota_estado_id', 'id');
    }
}
