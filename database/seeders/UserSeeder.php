<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // User::create([
        //     'name' => 'John Doe',
        //     'email' => 'john@example.com',
        //     'password' => bcrypt('password'),
        // ]);
        User::factory(10)->create();
    }
}
