<?php

namespace App\Models\ContatoEmail;

use App\Models\Contato\Contato;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContatoEmail extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'principal', 'contato_id'];

    public function contato()
    {
        return $this->belongsTo(Contato::class, 'contato_id');
    }
}
