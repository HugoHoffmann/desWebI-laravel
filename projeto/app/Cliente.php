<?php

namespace projeto;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    public $timestamps = false;
    public $incrementing = false;

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
