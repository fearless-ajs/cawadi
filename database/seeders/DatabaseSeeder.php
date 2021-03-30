<?php

namespace Database\Seeders;

use Database\Factories\Users\BuyerDetailFactory;
use Database\Factories\Users\PublisherDetailFactory;
use Database\Factories\Users\ReaderDetailFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(PublisherDetailFactory::class);
        $this->call(ReaderDetailFactory::class);
        $this->call(BuyerDetailFactory::class);
        $this->call(BookCategoriesSeeder::class);
        $this->call(AudioBooksSeeder::class);
        $this->call(BooksSeeder::class);
        $this->call(AudioBookRatingsSeeder::class);
        $this->call(AudioBookReviewsSeeder::class);
        $this->call(AudioBookTagsSeeder::class);
        $this->call(BookRatingsSeeder::class);
        $this->call(BookReviewsSeeder::class);
        $this->call(BookTagsSeeder::class);
        $this->call(CartsSeeder::class);
        $this->call(WishListsSeeder::class);

    }
}
