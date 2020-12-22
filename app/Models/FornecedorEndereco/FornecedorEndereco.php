<?php

namespace App\Models\FornecedorEndereco;

use App\Models\EnderecoFornecedor\EnderecoFornecedor;
use App\Models\Fornecedor\Fornecedor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FornecedorEndereco extends Model
{
    use HasFactory;

    protected $fillable = ['fornecedor_id', 'endereco_fornecedor_id'];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'fornecedor_id');
    }

    public function endereco()
    {
        return $this->belongsTo(EnderecoFornecedor::class, 'endereco_fornecedor_id');
    }
}
