<?php

namespace App\Models\NotaSerasa;

use App\Models\Clientes\cliente;
use App\Models\Nota\Nota;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NotaSerasa extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['nota_id', 'cliente_id'];

    public function nota()
    {
        return $this->belongsTo(Nota::class, 'nota_id');
    }

    public function cliente()
    {
        return $this->belongsTo(cliente::class, 'cliente_id');
    }
}
