<?php

namespace App\Models\StatusPedido;

use App\Models\PedidoStatusPedido\PedidoStatusPedido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPedido extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function hasPedidos()
    {
        return $this->hasMany(PedidoStatusPedido::class, 'status_pedido_id', 'id');
    }
}
