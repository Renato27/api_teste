<?php

namespace App\Models\Contratos;

use App\Models\ClienteContrato\ClienteContrato;
use App\Models\ContratoPedido\ContratoPedido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'inicio', 'fim', 'detalhes', 'detalhes_nota', 'dia_emissao_nota', 
    'dia_vencimento_nota', 'dia_periodo_inicio_nota', 'dia_periodo_fim_nota', 'responsavel'];

    public function hasCliente()
    {
        return $this->hasOne(ClienteContrato::class, 'contrato_id', 'id');
    }

    public function hasPedidos()
    {
        return $this->hasMany(ContratoPedido::class, 'contrato_id', 'id');
    }
}