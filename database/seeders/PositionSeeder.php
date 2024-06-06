<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('positions')->insert([
            'name' => 'President',
            'description' => 'This is a test description',
            'poll_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('positions')->insert([
            'name' => 'Vice President',
            'description' => 'This is a test description',
            'poll_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('positions')->insert([
            'name' => 'Treasurer',
            'description' => 'This is a test description',
            'poll_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('positions')->insert([
            'name' => 'P.R.O',
            'description' => 'This is a test description',
            'poll_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
