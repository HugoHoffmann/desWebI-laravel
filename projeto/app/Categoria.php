<?php

namespace projeto;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    public $timestamps = false;
    protected $fillable = [
        'category_id',
        'category_name',
        'description',
        'picture'
    ];
}
