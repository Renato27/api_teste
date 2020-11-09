<?php

namespace App\Models\ContatoTipo;

use App\Models\Contato\Contato;
use App\Models\TipoContato\TipoContato;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContatoTipo extends Model
{
    use HasFactory;

    protected $fillable = ['contato_id', 'tipo_contato_id'];

    public function contato()
    {
        return $this->belongsTo(Contato::class, 'contato_id');
    }

    public function tipo_contato()
    {
        return $this->belongsTo(TipoContato::class, 'tipo_contato_id');
    }
}
