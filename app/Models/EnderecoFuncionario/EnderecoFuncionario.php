<?php

namespace App\Models\EnderecoFuncionario;

use App\Models\FuncionarioEndereco\FuncionarioEndereco;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
