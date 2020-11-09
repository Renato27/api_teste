<?php

namespace App\Models\FuncionarioDado;

use App\Models\DadoFuncionario\DadoFuncionario;
use App\Models\Funcionario\Funcionario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuncionarioDado extends Model
{
    use HasFactory;

    protected $fillable = ['funcionario_id', 'dado_funcionario_id'];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }

    public function dado_funcionario()
    {
        return $this->belongsTo(DadoFuncionario::class, 'dado_funcionario_id');
    }
}
