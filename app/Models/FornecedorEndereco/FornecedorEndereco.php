<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\FornecedorEndereco;

use App\Models\Fornecedor\Fornecedor;
use Illuminate\Database\Eloquent\Model;
use App\Models\EnderecoFornecedor\EnderecoFornecedor;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
