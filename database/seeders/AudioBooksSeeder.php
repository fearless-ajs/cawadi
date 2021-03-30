<?php

namespace Database\Seeders;

use App\Models\Products\AudioBook;
use Illuminate\Database\Seeder;

class AudioBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AudioBook::factory(1000)->create();
    }
}
