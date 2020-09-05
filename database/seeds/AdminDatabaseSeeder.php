<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([

            'name' => 'Alaa',
            'email' => 'hanbali.alaa@gmail.com',
            'password' => bcrypt('123123123'),
        ]);
    }
}
