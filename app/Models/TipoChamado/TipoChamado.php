<?php

namespace App\Models\TipoChamado;

use App\Models\Chamado\Chamado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoChamado extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    const ENTREGA    = 1;
    const RETIRADA   = 2;
    const PREVENTIVA = 3;
    const CONTADOR   = 4;
    const CORRETIVA  = 5;
    const SUPRIMENTO = 6;
    const SUPORTE    = 7;
    const TROCA      = 8;
    const AUDITORIA  = 9;

    public function chamados()
    {
        return $this->hasMany(Chamado::class, 'tipo_chamado_id', 'id');
    }
}
