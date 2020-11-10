<?php

namespace App\Models\PagamentoMetodo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagamentoMetodo extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'detalhes'];
}
