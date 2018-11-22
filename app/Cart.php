<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $fillable = [
        "item_id", "user_id",
    ];
    
    public function product()
    {
       return $this->hasOne("App\Product",'id','item_id');
    }
}
