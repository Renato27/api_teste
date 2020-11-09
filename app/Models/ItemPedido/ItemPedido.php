<?php

namespace App\Models\ItemPedido;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    use HasFactory;

    protected $fillable = ['valor', 'quantidade', 'informacoes'];
}
