<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillabel = [
        'nome',
        'idade',
        'sexo',
        'cpf',
        'rg',
        'email',
        'senha'
    ];
}
