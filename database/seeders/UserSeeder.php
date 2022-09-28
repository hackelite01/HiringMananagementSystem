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
        User::truncate();

        User::create([
            'role_id' => 1,
            'name' => "admin",
            'email' => "admin@gmail.com",
            'phone' => "9876543210",
            'cv_link' => " ",
            'status' => "active",
            'password' => Hash::make('@12345678'),
        ]);

        // ten dummy user
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'role_id' => 2,
                'name' => "user $i",
                'email' => "user$i@gmail.com",
                'phone' => "9876543210$i",
                'cv_link' => "https://cdn-images.zety.com/images/zety/landings/templates/cascade@3x.png?$i",
                'status' => "pending",
                'password' => Hash::make('@12345678'),
            ]);
        }
    }
}
