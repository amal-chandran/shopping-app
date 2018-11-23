<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Amal Chandran',
                'gender' => NULL,
                'phone' => NULL,
                'email' => 'amalchandrandev@gmail.com',
                'password' => '$2y$10$gkNnd7HWvfkn2M30Ga5Rg.itGZsLpQ5CMZQEXdp8SNdHczxVegL1O',
                'remember_token' => 'j2omrrNm9wAjlAIJ4ErphWa943utghC9WxJVPUtevuFQqwxlRdaKMhghsEln',
                'created_at' => '2018-11-22 14:48:35',
                'updated_at' => '2018-11-22 14:48:35',
            ),
        ));
        
        
    }
}