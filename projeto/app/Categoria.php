<?php

namespace projeto;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'category_name',
        'description',
        'picture'
    ];
}
