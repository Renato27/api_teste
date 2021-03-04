<?php

namespace App\Models\SuporteInteracao;

use App\Models\Suporte\Suporte;
use App\Models\Usuario\Usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuporteInteracao extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['inicio', 'fim', 'detalhes', 'suporte_id', 'usuario_id'];

    public function suporte()
    {
        return $this->belongsTo(Suporte::class, 'suporte_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
