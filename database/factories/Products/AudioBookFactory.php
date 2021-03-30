<?php

namespace Database\Factories\Products;

use App\Models\Products\AudioBook;
use App\Models\Products\BookCategory;
use App\Models\Users\PublisherDetail;
use App\Models\Users\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AudioBookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AudioBook::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $front_covers             = array('front_01.jpg', 'front_02.jpg', 'front_03.jpg', 'front_04.jpg');
        $front_cover_key          = array_rand($front_covers);

        $back_covers             = array('back_01.jpg', 'back_02.jpg', 'back_03.jpg', 'back_04.jpg');
        $back_cover_key          = array_rand($back_covers);

        $side_covers             = array('side_01.jpg', 'side_02.jpg', 'side_03.jpg', 'side_04.jpg');
        $side_cover_key          = array_rand($side_covers);

        return [
            'title'             => $title = $this->faker->text(130),
            'type'              => rand(0, 1) ? AudioBook::PREMIUM_BOOK : AudioBook::FREE_BOOK,
            'author'            => $author = $this->faker->name,
            'slug'              => Str::slug($title).'_By_'.$author.Carbon::now()->timestamp.'_'.Str::random(30),
            'category'          => BookCategory::inRandomOrder()->first()->name,
            'price'             => $this->faker->numberBetween(100, 2000),
            'abstract'          => $this->faker->text(600),
            'description'       => $this->faker->text(1000),
            'stock'             => $this->faker->numberBetween(0, 100),
            'code'              => Str::random(10).$author.Carbon::now()->timestamp,
            'front_cover'       => $front_covers[$front_cover_key],
            'back_cover'        => $back_covers[$back_cover_key],
            'side_cover'        => $side_covers[$side_cover_key],
            'publisher_id'      => PublisherDetail::inRandomOrder()->first()->user_id,
            'text_status'       => false,
            'text_version_id'   => '',
            'approved_by_id'    => User::inRandomOrder()->first()->name,
            'approved_at'       => now(),
            'status'            => rand(0, 1) ? AudioBook::SUSPENDED : AudioBook::ACTIVE,
        ];
    }
}
