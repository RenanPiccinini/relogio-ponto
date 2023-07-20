<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'categoria_id',
        'subcategoria_id',
        'marca',
        'estoque',
        'tamanho',
        'cor',
        'imagem',
        'imagem2',
        'imagem3',
        'imagem4',
        'imagem5',
        'imagem6',
    ];
}
