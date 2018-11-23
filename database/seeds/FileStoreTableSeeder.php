<?php

use Illuminate\Database\Seeder;

class FileStoreTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('file_store')->delete();
        
        \DB::table('file_store')->insert(array (
            0 => 
            array (
                'id' => 1,
                'file_path' => 'images/PF5tCZAkMlVrJx8eMtKUzYO8zABTIKZqjxi6f6oV.jpeg',
                'bucket_id' => 1,
                'created_at' => '2018-11-22 14:50:18',
                'updated_at' => '2018-11-22 14:50:18',
            ),
        ));
        
        
    }
}