<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\StatusChamado;

use App\Models\Chamado\Chamado;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusChamado extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    const ABERTO = 1;

    const FECHADO = 2;

    const ENCERRADO = 3;

    const CANCELADO = 4;

    const EM_ANDAMENTO = 5;

    public function chamados()
    {
        return $this->hasMany(Chamado::class, 'status_chamado_id', 'id');
    }
}
