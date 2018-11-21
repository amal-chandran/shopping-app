<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileBucket extends Model
{
    protected $table = 'file_bucket';
    //
    public function files()
    {
        return $this->hasMany("App\FileStore", "bucket_id", "id");
    }

}
