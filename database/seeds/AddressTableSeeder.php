<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('address')->delete();
        
        \DB::table('address')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'name' => 'Amal Chandran',
                'pin' => 686579,
                'locality' => 'Erattupetta',
                'mobile' => 99999999,
                'address' => 'Kalloorath H
Kalathukadavu P.O
Kalathukadavu',
                'city' => 'Pala',
                'state' => 'Kottayam',
                'landmark' => 'Bridge',
                'type' => 'home',
                'created_at' => '2018-11-22 15:02:05',
                'updated_at' => '2018-11-22 15:02:05',
            ),
        ));
        
        
    }
}