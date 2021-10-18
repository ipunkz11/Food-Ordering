<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        User::create([
            "name" => "Owner",
            "email" => "owner@pur.com",
            "password" => bcrypt(123456),
            "role" => "Owner"
        ]);
        User::create([
            "name" => "Admin",
            "email" => "admin@pur.com",
            "password" => bcrypt(123456),
            "role" => "Admin"
        ]);
        User::create([
            "name" => "Customer",
            "email" => "customer@pur.com",
            "password" => bcrypt(123456),
            "role" => "Customer"
        ]);
    }
}
