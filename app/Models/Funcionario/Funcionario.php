<?php

namespace App\Models\Funcionario;

use App\Models\FuncionarioDado\FuncionarioDado;
use App\Models\FuncionarioEndereco\FuncionarioEndereco;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome', 'cargo'];

    public function hasEndereco()
    {
        return $this->hasOne(FuncionarioEndereco::class, 'funcionario_id', 'id');
    }

    public function hasDados()
    {
        return $this->hasOne(FuncionarioDado::class, 'funcionario_id', 'id');
    }
}
