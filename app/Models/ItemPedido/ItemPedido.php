<?php

namespace App\Models\ItemPedido;

use App\Models\ItemDefinido\ItemDefinido;
use App\Models\Modelo\Modelo;
use App\Models\Pedido\Pedido;
use App\Models\PedidoItem\PedidoItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemPedido extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['valor', 'quantidade', 'informacoes', 'modelo_id', 'item_definido_id'];

    public function pedido()
    {
        return $this->hasOneThrough(Pedido::class, PedidoItem::class, 'item_pedido_id', 'id', 'id', 'pedido_id');
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'modelo_id');
    }

    public function item_definido()
    {
        return $this->belongsTo(ItemDefinido::class, 'item_definido_id');
    }
}
