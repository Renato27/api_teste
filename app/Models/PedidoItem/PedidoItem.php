<?php

namespace App\Models\PedidoItem;

use App\Models\ItemPedido\ItemPedido;
use App\Models\Pedido\Pedido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PedidoItem extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['pedido_id', 'item_id'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }

    public function item()
    {
        return $this->belongsTo(ItemPedido::class, 'item_id');
    }
}
