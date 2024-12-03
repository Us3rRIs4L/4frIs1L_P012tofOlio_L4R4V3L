<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'AFZ',
            'email' => 'afrisal@mail.com',
            'password' => bcrypt('1234567890'), 
            'role' => 'admin',
        ]);
    }
}
