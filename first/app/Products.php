<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'product_name', 'product_quantity', 'product_code'
    ];
}
