<?php

namespace Database\Factories\Products;


use App\Models\Products\AudioBook;
use App\Models\Products\AudioBookReview;
use App\Models\Users\BuyerDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class AudioBookReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AudioBookReview::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'buyer_id'   => BuyerDetail::inRandomOrder()->first()->user_id,
            'book_id'    => AudioBook::inRandomOrder()->first()->id,
            'review'     => $this->faker->paragraphs(5, true), //Between 1 and 5
        ];
    }
}
