<?php

namespace App\Models\ItemPedido;

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

    protected $fillable = ['valor', 'quantidade', 'informacoes'];

    public function pedido()
    {
        return $this->hasOneThrough(Pedido::class, PedidoItem::class, 'pedido_id', 'id');
    }
}
