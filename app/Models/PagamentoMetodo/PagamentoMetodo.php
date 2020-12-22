<?php

namespace App\Models\PagamentoMetodo;

use App\Models\Contratos\Contrato;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PagamentoMetodo extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome', 'detalhes'];

    public function contratos()
    {
        return $this->hasMany(Contrato::class, 'pagamento_metodo_id', 'id');
    }
}
