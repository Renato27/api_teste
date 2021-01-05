<?php

namespace App\Models\EnderecoFornecedor;

use App\Models\Fornecedor\Fornecedor;
use App\Models\FornecedorEndereco\FornecedorEndereco;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnderecoFornecedor extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['rua', 'numero', 'bairro', 'complemento', 'cidade', 'estado', 'cep'];

    public function fornecedor()
    {
        return $this->hasOneThrough(Fornecedor::class, FornecedorEndereco::class, 'endereco_fornecedor_id', 'id');
    }
}
