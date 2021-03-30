<?php

namespace Database\Factories\Products;

use App\Models\Products\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookTagFactory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tags = array('Bell', 'Romance', 'Sport', 'Nature', 'Love', 'War', 'Spiritual', 'Horror');
        $key  = array_rand($tags);
        return [
            'name'    => $tags[$key],
            'book_id' => Book::inRandomOrder()->first()->id,
        ];
    }
}
