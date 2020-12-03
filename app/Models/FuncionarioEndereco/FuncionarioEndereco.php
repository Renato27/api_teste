<?php

namespace App\Models\FuncionarioEndereco;

use App\Models\EnderecoFuncionario\EnderecoFuncionario;
use App\Models\Funcionario\Funcionario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FuncionarioEndereco extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['funcionario_id', 'endereco_funcionario_id'];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }

    public function endereco_funcionario()
    {
        return $this->belongsTo(EnderecoFuncionario::class, 'endereco_funcionario_id');
    }
}
