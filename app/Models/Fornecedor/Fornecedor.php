<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Fornecedor;

use App\Models\Compra\Compra;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\FornecedorCompra\FornecedorCompra;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fornecedor extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $table = 'fornecedores';

    protected $fillable = ['razao_social', 'nome_fantasia', 'cpf_cnpj', 'observacao'];

    public function patrimonios()
    {
        return $this->hasMany(Patrimonio::class, 'fornecedor_id', 'id');
    }

    public function compras()
    {
        return $this->hasManyThrough(Compra::class, FornecedorCompra::class, 'fornecedor_id', 'id', 'id', 'compra_id');
    }
}
