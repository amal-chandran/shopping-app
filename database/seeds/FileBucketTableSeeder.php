<?php

use Illuminate\Database\Seeder;

class FileBucketTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('file_bucket')->delete();
        
        \DB::table('file_bucket')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2018-11-22 14:50:18',
                'updated_at' => '2018-11-22 14:50:18',
            ),
        ));
        
        
    }
}