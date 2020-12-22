<?php

namespace App\Models\Transportadora;

use App\Models\Compra\Compra;
use App\Models\TransportadoraCompra\TransportadoraCompra;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
