<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
        'comment','product_id','rating'
    ];

    public function user()
    {
        $this->belongsTo("App/User",'id','user_id');
    }
}
