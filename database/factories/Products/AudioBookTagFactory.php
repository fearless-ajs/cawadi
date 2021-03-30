<?php

namespace Database\Factories\Products;


use App\Models\Products\AudioBook;
use App\Models\Products\AudioBookTag;
use Illuminate\Database\Eloquent\Factories\Factory;

class AudioBookTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AudioBookTag::class;

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
            'name' => $tags[$key],
            'book_id' => AudioBook::inRandomOrder()->first()->id,
        ];
    }
}
