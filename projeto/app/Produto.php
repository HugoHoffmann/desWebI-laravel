<?php

namespace projeto;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'company_name',
        'contact_name',
        'contact_title',
        'address',
        'city',
        'region',
        'postal_code',
        'country',
        'phone',
        'fax',
    ];
}
