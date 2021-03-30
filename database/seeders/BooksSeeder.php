<?php

namespace Database\Seeders;

use App\Models\Products\Book;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::factory(1000)->create();
    }
}
