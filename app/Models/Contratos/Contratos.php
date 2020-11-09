<?php

namespace App\Models\Contratos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contratos extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'inicio', 'fim', 'detalhes', 'detalhes_nota', 'dia_emissao_nota', 
    'dia_vencimento_nota', 'dia_periodo_inicio_nota', 'dia_periodo_fim_nota', 'responsavel'];
}
