<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = [
        'user_id', 'item_id', 'payment_id', 'address_id', 'item_count'

    ];


    public function payment()
    {
       return $this->hasOne("App\Payment",'id','payment_id');
    }
    
    public function address()
    {
        $this->hasOne('App\Address','id','address_id');
    }
}
