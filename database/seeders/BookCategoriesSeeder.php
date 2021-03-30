<?php

namespace Database\Seeders;

use App\Models\Products\BookCategory;
use Illuminate\Database\Seeder;

class BookCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookCategory::factory(50)->create();
    }
}
