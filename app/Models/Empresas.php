<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'cnpj',
        'email',
        'senha',
        'nomeEmpresa',
        'codEmpresa',
        'codLoja',
        'flagAtivo',
        'vencTrial',
        'dataContratacao',
        'dataCadastro'
    ];
}
