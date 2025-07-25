<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'password' => Hash::make('user'),
        ]);

        User::factory(10)->create();

        Product::factory(10)->create();

        // Order::factory(5)->create();
    }
}
