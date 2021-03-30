<?php

namespace Database\Factories\Transactions;

use App\Models\Products\AudioBook;
use App\Models\Products\Book;
use App\Models\Transactions\Cart;
use App\Models\Transactions\WishList;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class WishListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WishList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = array(Cart::AUDIO_BOOK, Cart::TEXT_BOOK);
        $key   = array_rand($types);
        return [
            'book_id'   => $types[$key] == Cart::AUDIO_BOOK ? AudioBook::inRandomOrder()->first()->id : Book::inRandomOrder()->first()->id ,
            'book_type' => $types[$key],
            'user_id'   => User::inRandomOrder()->first()->id,
            'volume'    => $this->faker->numberBetween(1, 100),
        ];
    }
}
