<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\TrocaPatrimonio;

use App\Models\Troca\Troca;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TrocaPatrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['troca_id', 'patrimonio_id', 'item_pedido_id', 'checked'];

    public function troca()
    {
        return $this->belongsTo(Troca::class, 'troca_id');
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function item_pedido()
    {
        return $this->belongsTo(ItemPedido::class, 'item_pedido_id');
    }
}
