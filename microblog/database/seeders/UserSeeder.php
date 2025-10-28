<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'admin',
        ]);

        $user->assignRole('admin');

        $user = User::factory()->create([
            'name' => 'John',
            'email' => 'john@example.com',
            'password' => 'john',
        ]);
    }
}
