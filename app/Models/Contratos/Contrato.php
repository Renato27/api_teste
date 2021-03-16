<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Contratos;

use App\Models\Nota\Nota;
use App\Models\Pedido\Pedido;
use App\Models\Contato\Contato;
use App\Models\Clientes\Cliente;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemDefinido\ItemDefinido;
use App\Models\ContratoPedido\ContratoPedido;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ClienteContrato\ClienteContrato;
use App\Models\ContatoContrato\ContatoContrato;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ContratoItemDefinido\ContratoItemDefinido;

class Contrato extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome', 'inicio', 'fim', 'medicao_tipo_id', 'pagamento_metodo_id', 'contrato_tipo_id', 'detalhes', 'detalhes_nota', 'dia_emissao_nota',
        'dia_vencimento_nota', 'dia_periodo_inicio_nota', 'dia_periodo_fim_nota', 'responsavel', ];

    public function cliente()
    {
        return $this->hasOneThrough(Cliente::class, ClienteContrato::class, 'contrato_id', 'id', 'id', 'cliente_id');
    }

    public function contatos()
    {
        return $this->hasManyThrough(Contato::class, ContatoContrato::class, 'contrato_id', 'id', 'id', 'contato_id');
    }

    public function pedidos()
    {
        return $this->hasManyThrough(Pedido::class, ContratoPedido::class, 'contrato_id', 'id');
    }

    public function itens()
    {
        return $this->hasManyThrough(ItemDefinido::class, ContratoItemDefinido::class, 'contrato_id', 'id', 'id', 'item_definido_id');
    }

    public function notas()
    {
        return $this->hasMany(Nota::class, 'contrato_id', 'id');
    }
}
