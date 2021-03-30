<?php

namespace Database\Seeders;

use App\Models\Products\BookTag;
use Illuminate\Database\Seeder;

class BookTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       BookTag::factory(500)->create();
    }
}
