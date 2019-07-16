<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->insert([
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 1 
            ],
            [
                'email' => 'quochuy@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 1
            ]
        ]);
    }
}
