<?php

namespace projeto;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = [ 
        'NomeCompanhia', 
        'NomeContato',
        'TituloContato',
        'Endereco',
        'Cidade',
        'Regiao',
        'CEP',
        'Pais',
        'Telefone',
        'Fax'
    ];
}
