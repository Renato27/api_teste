<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\TransportadoraCompra;

use App\Models\Compra\Compra;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transportadora\Transportadora;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransportadoraCompra extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['transportadora_id', 'compra_id'];

    public function transportadora()
    {
        return $this->belongsTo(Transportadora::class, 'transportadora_id');
    }

    public function compra()
    {
        return $this->belongsTo(Compra::class, 'compra_id');
    }
}
