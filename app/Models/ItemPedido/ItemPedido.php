<?php

namespace App\Models\ItemPedido;

use App\Models\PedidoItem\PedidoItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    use HasFactory;

    protected $fillable = ['valor', 'quantidade', 'informacoes'];

    public function hasPedido()
    {
        return $this->hasOne(PedidoItem::class, 'pedido_id', 'id');
    }
}
