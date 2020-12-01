<?php

namespace App\Models\PedidoItem;

use App\Models\ItemPedido\ItemPedido;
use App\Models\Pedido\Pedido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoItem extends Model
{
    use HasFactory;

    protected $fillable = ['pedido_id', 'item_pedido_id'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }

    public function item()
    {
        return $this->belongsTo(ItemPedido::class, 'item_pedido_id');
    }
}
