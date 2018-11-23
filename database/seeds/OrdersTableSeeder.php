<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'item_id' => 1,
                'payment_id' => 1,
                'address_id' => 1,
                'item_count' => 3,
                'created_at' => '2018-11-22 15:26:35',
                'updated_at' => '2018-11-22 15:26:35',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'item_id' => 1,
                'payment_id' => 2,
                'address_id' => 1,
                'item_count' => 2,
                'created_at' => '2018-11-23 07:21:24',
                'updated_at' => '2018-11-23 07:21:24',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'item_id' => 1,
                'payment_id' => 3,
                'address_id' => 1,
                'item_count' => 2,
                'created_at' => '2018-11-23 07:23:21',
                'updated_at' => '2018-11-23 07:23:21',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'item_id' => 1,
                'payment_id' => 4,
                'address_id' => 1,
                'item_count' => 2,
                'created_at' => '2018-11-23 08:17:19',
                'updated_at' => '2018-11-23 08:17:19',
            ),
        ));
        
        
    }
}