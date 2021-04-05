<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\NotaEspelhoEstado;

use App\Models\NotaEspelho\NotaEspelho;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NotaEspelhoEstado extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome'];

    const PENDENTE = 1;

    const PROCESSADO = 2;

    const CANCELADO = 3;

    const AGUARDANDO_CHAMADO = 4;

    public function nota_espelhos()
    {
        return $this->hasMany(NotaEspelho::class, 'nota_espelho_estado_id', 'id');
    }
}
