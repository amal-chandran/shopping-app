<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "product_name", "small_desc",
        "price", "detailed_desc",
    ];
    //
}
