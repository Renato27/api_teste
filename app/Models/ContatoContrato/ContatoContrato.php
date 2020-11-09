<?php

namespace App\Models\ContatoContrato;

use App\Models\Contato\Contato;
use App\Models\Contratos\Contratos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContatoContrato extends Model
{
    use HasFactory;

    protected $fillable = ['contato_id', 'contrato_id'];

    public function contato()
    {
        return $this->belongsTo(Contato::class, 'contato_id');
    }

    public function contrato()
    {
        return $this->belongsTo(Contratos::class, 'contrato_id');
    }
}
