<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\StatusPedido;

use App\Models\Pedido\Pedido;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusPedido extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome'];

    const AGUARDANDO_EXPEDICAO = 1;

    const AGUARDANDO_ENTREGA = 2;

    const ENTREGUE = 3;

    const CANCELADO = 4;

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'status_pedido_id', 'id');
    }
}
