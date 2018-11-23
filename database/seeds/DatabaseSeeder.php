<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(AddressTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        $this->call(FileBucketTableSeeder::class);
        $this->call(FileStoreTableSeeder::class);
        $this->call(ListItemsTableSeeder::class);
        $this->call(NamedListsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
    }
}
