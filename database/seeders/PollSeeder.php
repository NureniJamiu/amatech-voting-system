<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('polls')->insert([
            'title' => '2024 Amatech Lasu SRC Vote',
            'description' => 'This is a test description',
            'is_active' => 0,
            'end_time' => Carbon::tomorrow(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
