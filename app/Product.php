<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "product_name", "small_desc",
        "price", "detailed_desc","file_bucket_id"
    ];
    //

    public function file_bucket()
    {
        return $this->hasOne("App\FileBucket", "id", "file_bucket_id");
    }

}
