<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::insert([
            //'name' => "Admin",
            //'email' => "Admin@gmail.com",
            //'password' => Hash::make('12345678'),
       // ]);

            User::factory()->count(5)->create();
    }
}
