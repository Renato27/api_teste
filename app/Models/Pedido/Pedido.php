<?php

namespace App\Models\Pedido;

use App\Models\ContratoPedido\ContratoPedido;
use App\Models\ItemPedido\ItemPedido;
use App\Models\PedidoItem\PedidoItem;
use App\Models\PedidoStatusPedido\PedidoStatusPedido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['data_entrega', 'data_retirada'];

    public function hasItens()
    {
        return $this->hasMany(PedidoItem::class, 'pedido_id', 'id');
    }

    public function hasContrato()
    {
        return $this->hasOne(ContratoPedido::class, 'pedido_id', 'id');
    }

    public function hasStatus()
    {
        return $this->hasOne(PedidoStatusPedido::class, 'pedido_id', 'id');
    }
}
