<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@dev.com',
            'password' => Hash::make('superadmin@dev.com'),
            'is_admin' => true,
            'email_verified_at' => now()
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@dev.com',
            'password' => Hash::make('admin@dev.com'),
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@dev.com',
            'password' => Hash::make('user@dev.com'),
            'is_admin' => false,
            'email_verified_at' => now()
        ]);
        User::create([
            'name' => 'Test User',
            'email' => 'testuser@dev.com',
            'password' => Hash::make('testuser@dev.com'),
            'is_admin' => false,
        ]);
    }
}
