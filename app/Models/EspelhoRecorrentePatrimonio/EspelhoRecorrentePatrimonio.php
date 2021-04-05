<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\EspelhoRecorrentePatrimonio;

use App\Models\Pedido\Pedido;
use App\Models\ItemPedido\ItemPedido;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemDefinido\ItemDefinido;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\EspelhoRecorrente\EspelhoRecorrente;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EspelhoRecorrentePatrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['data_entrega', 'patrimonio_id', 'espelho_recorrente_id', 'pedido_id', 'item_pedido_id', 'item_definido_id'];

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function espelho_recorrente()
    {
        return $this->belongsTo(EspelhoRecorrente::class, 'espelho_recorrente_id');
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }

    public function item_pedido()
    {
        return $this->belongsTo(ItemPedido::class, 'item_pedido_id');
    }

    public function item_definido()
    {
        return $this->belongsTo(ItemDefinido::class, 'item_definido_id');
    }
}
