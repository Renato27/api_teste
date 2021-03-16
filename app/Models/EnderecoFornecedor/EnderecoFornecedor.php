<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\EnderecoFornecedor;

use App\Models\Fornecedor\Fornecedor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\FornecedorEndereco\FornecedorEndereco;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EnderecoFornecedor extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $table = 'endereco_fornecedores';

    protected $fillable = ['rua', 'numero', 'bairro', 'complemento', 'cidade', 'estado', 'cep'];

    public function fornecedor()
    {
        return $this->hasOneThrough(Fornecedor::class, FornecedorEndereco::class, 'endereco_fornecedor_id', 'id');
    }
}
