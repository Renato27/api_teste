<?php

namespace App\Models\EnderecoFuncionario;

use App\Models\FuncionarioEndereco\FuncionarioEndereco;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecoFuncionario extends Model
{
    use HasFactory;

    protected $fillable = ['rua', 'numero', 'bairro', 'complemento', 'cidade', 'cep'];

    public function hasFuncionario()
    {
        return $this->hasOne(FuncionarioEndereco::class, 'endereco_funcionario_id', 'id');
    }
}
