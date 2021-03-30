<?php

namespace Database\Seeders;

use App\Models\Products\AudioBookReview;
use Illuminate\Database\Seeder;

class AudioBookReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AudioBookReview::factory(1000)->create();
    }
}
