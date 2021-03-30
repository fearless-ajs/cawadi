<?php

namespace Database\Seeders;

use App\Models\Products\AudioBookTag;
use Illuminate\Database\Seeder;

class AudioBookTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AudioBookTag::factory(1000)->create();
    }
}
