<?php

namespace App\Models\ContatoContrato;

use App\Models\Contato\Contato;
use App\Models\Contratos\Contrato;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContatoContrato extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['contato_id', 'contrato_id'];

    public function contato()
    {
        return $this->belongsTo(Contato::class, 'contato_id');
    }

    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'contrato_id');
    }
}
