<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Funcionario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\EnderecoFuncionario\EnderecoFuncionario;
use App\Models\FuncionarioEndereco\FuncionarioEndereco;

class Funcionario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome', 'cargo', 'telefone', 'rg', 'cpf', 'titulo_eleitor', 'secao_titulo_eleitor', 'ctps', 'email'];

    public function hasEndereco()
    {
        return $this->hasOneThrough(EnderecoFuncionario::class, FuncionarioEndereco::class, 'funcionario_id', 'id');
    }
}
