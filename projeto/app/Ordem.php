<?php

namespace projeto;

use Illuminate\Database\Eloquent\Model;

class Ordem extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    public $timestamps = false;
    public $incrementing = false;
}
