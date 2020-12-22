<?php

namespace App\Models\ClienteVisualizacaoPatrimonio;

use App\Models\Usuario\Usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteVisualizacaoPatrimonio extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    const VISUALIZACAO_PATRIMONIOS_GRUPO    = 1;
    const VISUALIZACAO_PATRIMONIOS_CLIENTE  = 2;
    const VISUALIZACAO_PATRIMONIOS_ENDERECO = 3;


    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'cliente_visualizacao_patrimonio_id', 'id');
    }
}
