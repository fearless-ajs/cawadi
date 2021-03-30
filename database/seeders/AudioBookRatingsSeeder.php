<?php

namespace Database\Seeders;

use App\Models\Products\AudioBookRating;
use Illuminate\Database\Seeder;

class AudioBookRatingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AudioBookRating::factory(1000)->create();
    }
}
