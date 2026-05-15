<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Théo',
            'email' => 'theo@overshar.es',
            'password' => env('AUTH_PASSWORD') ?? 'change_this',
        ]);
    }
}
