<?php

use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 10; $i++){
            DB::table('products')->insert([
                'name' => 'Iphone' .$i,
                'price' => 3500000 + $i*100000,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
