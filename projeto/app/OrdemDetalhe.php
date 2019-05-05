<?php

namespace projeto;

use Illuminate\Database\Eloquent\Model;

class OrdemDetalhe extends Model
{
    protected $table = 'order_details';
    protected $primaryKey = ['order_id', 'product_id'];
    public $timestamps = false;
    public $incrementing = false;

    protected $fillabre = [
        'order_id',
        'product_id',
        'unit_price',
        'quantity',
        'discount'
    ];
}
