<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\EnderecoFuncionario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\FuncionarioEndereco\FuncionarioEndereco;

class EnderecoFuncionario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['rua', 'numero', 'bairro', 'complemento', 'cidade', 'cep'];

    public function funcionario()
    {
        return $this->hasOneThrough(Funcionario::class, FuncionarioEndereco::class, 'endereco_funcionario_id', 'id');
    }
}
