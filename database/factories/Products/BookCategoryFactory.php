<?php

namespace Database\Factories\Products;


use App\Models\Products\BookCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tags = array('Bell', 'Romance', 'Sport', 'Nature', 'Love', 'War', 'Spiritual', 'Horror', 'Politics', 'Art', 'Sci-fi');
        $key  = array_rand($tags);

        return [
            'name'        => $tags[$key],
            'description' => $this->faker->paragraph(15),
        ];
    }
}
