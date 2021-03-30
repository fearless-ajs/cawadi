<?php

namespace Database\Factories\Products;


use App\Models\Products\Book;
use App\Models\Products\BookRating;
use App\Models\Users\BuyerDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookRatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookRating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'buyer_id'   => BuyerDetail::inRandomOrder()->first()->user_id,
            'book_id'    => Book::inRandomOrder()->first()->id,
            'rating'     => $this->faker->numberBetween(1, 5), //Between 1 and 5
        ];
    }
}
