<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'method' => 'COD',
                'amount' => 2200,
                'created_at' => '2018-11-22 15:26:35',
                'updated_at' => '2018-11-22 15:26:35',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'method' => 'COD',
                'amount' => 2200,
                'created_at' => '2018-11-23 07:21:24',
                'updated_at' => '2018-11-23 07:21:24',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'method' => 'COD',
                'amount' => 2200,
                'created_at' => '2018-11-23 07:23:21',
                'updated_at' => '2018-11-23 07:23:21',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'method' => 'COD',
                'amount' => 2200,
                'created_at' => '2018-11-23 08:17:19',
                'updated_at' => '2018-11-23 08:17:19',
            ),
        ));
        
        
    }
}