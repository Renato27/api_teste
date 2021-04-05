<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\PatrimonioAlugado;

use App\Models\Pedido\Pedido;
use App\Models\Chamado\Chamado;
use App\Models\Clientes\Cliente;
use App\Models\Endereco\Endereco;
use App\Models\Contratos\Contrato;
use App\Models\ItemPedido\ItemPedido;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemDefinido\ItemDefinido;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatrimonioAlugado extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['data_entrega', 'valor', 'cobrado', 'patrimonio_id', 'pedido_id', 'cliente_id', 'contrato_id', 'item_pedido_id',
        'item_definido_id', 'chamado_id', 'endereco_id', ];

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'contrato_id');
    }

    public function item_pedido()
    {
        return $this->belongsTo(ItemPedido::class, 'item_pedido_id');
    }

    public function item_definido()
    {
        return $this->belongsTo(ItemDefinido::class, 'item_definido_id');
    }

    public function chamado()
    {
        return $this->belongsTo(Chamado::class, 'chamado_id');
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }
}
