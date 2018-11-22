<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $table="address";

    protected $fillable = [
        'name', 'pin', 'locality', 'mobile', 'address', 'city', 'state', 'landmark', 'type',
    ];
}
