<?php

namespace projeto;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'product_id',
        'product_name',
        'supplier_id',
        'category_id',
        'quantity_per_unit',
        'unit_price',
        'units_in_stock',
        'units_on_order',
        'reorder_level',
        'discontinued',
    ];

    public function categoria() {
        return $this->belongsTo('projeto\Categoria', 'category_id', 'category_id');
    }
}
