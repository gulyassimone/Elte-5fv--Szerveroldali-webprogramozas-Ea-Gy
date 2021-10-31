<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Rating;
use App\Models\User;
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
        for ($i = 1; $i <= 30; $i++) {
            for ($j = 1; $j <= 100; $j++) {
                Rating::factory()->create([
                    'user_id' => $i,
                    'movie_id' => $j
                ]);
            }
        }
    }
}
