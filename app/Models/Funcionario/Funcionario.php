<?php

namespace App\Models\Funcionario;

use App\Models\EnderecoFuncionario\EnderecoFuncionario;
use App\Models\FuncionarioDado\FuncionarioDado;
use App\Models\FuncionarioEndereco\FuncionarioEndereco;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
