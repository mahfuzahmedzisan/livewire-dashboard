<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@dev.com',
            'password' => Hash::make('superadmin@dev.com'),
            'email_verified_at' => now()
        ]);
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@dev.com',
            'password' => Hash::make('admin@dev.com'),
        ]);
    }
}
