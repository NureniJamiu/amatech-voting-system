<?php

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\CandidateSeeder;
use Database\Seeders\PollSeeder;
use Database\Seeders\PositionSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

       $this->call(UserSeeder::class);
       $this->call(PollSeeder::class);
       $this->call(PositionSeeder::class);
       $this->call(CandidateSeeder::class);

    }
}
