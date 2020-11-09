<?php

namespace App\Models\EnderecoFuncionario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecoFuncionario extends Model
{
    use HasFactory;

    protected $fillable = ['rua', 'numero', 'bairro', 'complemento', 'cidade', 'cep'];
}
