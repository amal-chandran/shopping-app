<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('products')->delete();

        \DB::table('products')->insert(array(
            0 => array(
                'id' => 1,
                'product_name' => 'Honor',
                'small_desc' => '2 GB RAM | 16 GB ROM | Expandable Upto 256 GB',
                'price' => 5999,
                'detailed_desc' => '12 Months on Handset, 6 Months on Battery, 6 Months on Charger & 3 Months on Data Cable',
                'created_at' => '2018-11-18 20:56:26',
                'updated_at' => '2018-11-18 20:56:26',
            ),
            1 => array(
                'id' => 2,
                'product_name' => 'Honor 7s',
                'small_desc' => '2 GB RAM | 16 GB ROM | Expandable Upto 256 GB',
                'price' => 5999,
                'detailed_desc' => '12 Months on Handset, 6 Months on Battery, 6 Months on Charger & 3 Months on Data Cable',
                'created_at' => '2018-11-18 20:56:26',
                'updated_at' => '2018-11-18 20:56:26',
            ),
            2 => array(
                'id' => 3,
                'product_name' => 'Honor',
                'small_desc' => '2 GB RAM | 16 GB ROM | Expandable Upto 256 GB',
                'price' => 5999,
                'detailed_desc' => '12 Months on Handset, 6 Months on Battery, 6 Months on Charger & 3 Months on Data Cable',
                'created_at' => '2018-11-18 20:56:26',
                'updated_at' => '2018-11-18 20:56:26',
            ),
            3 => array(
                'id' => 4,
                'product_name' => 'Honor 7s',
                'small_desc' => '2 GB RAM | 16 GB ROM | Expandable Upto 256 GB',
                'price' => 5999,
                'detailed_desc' => '12 Months on Handset, 6 Months on Battery, 6 Months on Charger & 3 Months on Data Cable',
                'created_at' => '2018-11-18 20:56:26',
                'updated_at' => '2018-11-18 20:56:26',
            ),
        ));

    }
}
