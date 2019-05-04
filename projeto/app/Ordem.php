<?php

namespace projeto;

use Illuminate\Database\Eloquent\Model;

class Ordem extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillabre = [
        'order_id',
        'customer_id',
        'employee_id',
        'order_date',
        'required_date',
        'shipped_date',
        'ship_via',
        'freight',
        'ship_name',
        'ship_address',
        'ship_city',
        'ship_region',
        'ship_postal_code',
        'ship_country'
    ];
}
