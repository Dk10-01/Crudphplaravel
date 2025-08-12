<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produto extends Model
{
    use HasFactory;

    // Nome da tabela associada
    protected $table = 'produtos';

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',
        'preco',
        'descricao',
    ];

    public $timestamps = true;
}
