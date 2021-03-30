<?php

namespace Database\Seeders;

use App\Models\Products\BookRating;
use Illuminate\Database\Seeder;

class BookRatingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookRating::factory(1000)->create();
    }
}
