<?php

namespace App\Models\StatusChamado;

use App\Models\Chamado\Chamado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusChamado extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    const ABERTO                      = 1;
    const FECHADO                     = 2;
    const ENCERRADO                   = 3;
    const CANCELADO                   = 4;
    const EM_ANDAMENTO                = 5;

    public function chamados()
    {
        return $this->hasMany(Chamado::class, 'status_chamado_id', 'id');
    }
}
