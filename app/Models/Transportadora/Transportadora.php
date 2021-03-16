<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Transportadora;

use App\Models\Compra\Compra;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\TransportadoraCompra\TransportadoraCompra;

class Transportadora extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome', 'valor_frete'];

    public function compras()
    {
        return $this->hasManyThrough(Compra::class, TransportadoraCompra::class, 'transportadora_id', 'id');
    }
}
