<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create the first user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com', 
        ]);

        // Create the second user with login info
        User::factory()->create([
            'name' => 'Bilal',
            'email' => 'bilal@gmail.com',
            'password' => Hash::make('1234567890'), // Hash the password
        ]);
    }
}
