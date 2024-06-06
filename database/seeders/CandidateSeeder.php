<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('candidates')->insert([
            'name' => 'Nureni Jamiu',
            'level' => '400L',
            'image' => 'test image',
            'about' => 'This is a test bio',
            'position_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('candidates')->insert([
            'name' => 'Gbemisola Adeshina',
            'level' => '200L',
            'image' => 'test image',
            'about' => 'This is a test bio',
            'position_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('candidates')->insert([
            'name' => 'Maleeq Mustaphar',
            'level' => '200L',
            'image' => 'test image',
            'about' => 'This is a test bio',
            'position_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('candidates')->insert([
            'name' => 'Daniel Adetimehin',
            'level' => '400L',
            'image' => 'test image',
            'about' => 'This is a test bio',
            'position_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('candidates')->insert([
            'name' => 'Wasiu Hajara',
            'level' => '400L',
            'image' => 'test image',
            'about' => 'This is a test bio',
            'position_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('candidates')->insert([
            'name' => 'Akinmuseye Victoria',
            'level' => '300L',
            'image' => 'test image',
            'about' => 'This is a test bio',
            'position_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('candidates')->insert([
            'name' => 'Fasomo Tijani',
            'level' => '300L',
            'image' => 'test image',
            'about' => 'This is a test bio',
            'position_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('candidates')->insert([
            'name' => 'Tolani Bamidele',
            'level' => '100L',
            'image' => 'test image',
            'about' => 'This is a test bio',
            'position_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
