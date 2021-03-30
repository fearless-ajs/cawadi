<?php

namespace Database\Seeders;

use App\Models\Products\BookReview;
use Illuminate\Database\Seeder;

class BookReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookReview::factory(500)->create();
    }
}
