<?php

use Illuminate\Database\Seeder;

class ListItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('list_items')->delete();
        
        
        
    }
}