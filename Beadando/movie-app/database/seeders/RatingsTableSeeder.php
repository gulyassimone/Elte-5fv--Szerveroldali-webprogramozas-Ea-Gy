<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Rating;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->truncate();
        Rating::factory(1500)
            ->has(User::factory()->count(30), 'users')
            ->has(Movie::factory()->count(100), 'movies')
            ->create();
    }
}
