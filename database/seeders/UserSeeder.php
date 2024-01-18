<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('test123'),
            'isAdmin' => true,
            'user_approved_at' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@test.com',
            'password' => Hash::make('test123'),
            'isAdmin' => false,
            'user_approved_at' => false,
        ]);

        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@test.com',
            'password' => Hash::make('test123'),
            'isAdmin' => false,
            'user_approved_at' => false,
        ]);
    }
}
