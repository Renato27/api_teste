<?php

namespace App\Models\DadoFuncionario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadoFuncionario extends Model
{
    use HasFactory;

    protected $fillable = ['telefone', 'rg', 'cpf', 'titulo_eleitor', 'secao_titulo_eleitor', 'ctps', 'email'];

    public function hasFuncionario()
    {
        return $this->hasOne(DadoFuncionario::class, 'dado_funcionario_id', 'id');
    }
}
