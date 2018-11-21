<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileStore extends Model
{
    protected $table = 'file_store';

    protected $fillable = [
        "file_path", 
    ];
    //

}
