<?php

namespace App\Models\CobrancaAtividade;

use App\Models\Cobranca\Cobranca;
use App\Models\Usuario\Usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CobrancaAtividade extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['data_contato', 'responsavel', 'detalhes', 'cobranca_id', 'usuario_id'];

    public function cobranca()
    {
        return $this->belongsTo(Cobranca::class, 'cobranca_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
