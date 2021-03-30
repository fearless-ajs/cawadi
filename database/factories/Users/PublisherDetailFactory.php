<?php

namespace Database\Factories\Users;

use App\Models\Users\PublisherDetail;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PublisherDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $countries = ['Nigeria', 'Cameroon'];
        $country_key = array_rand($countries);

        $nigeria_states = ['Ondo', 'Oyo', 'Osun', 'Anambra', 'Lagos'];
        $nig_key = array_rand($nigeria_states);

        $cameroon_states = ['Adamawa', 'Littoral', 'Northwest', 'Far North', 'East'];
        $cam_key = array_rand($cameroon_states);

        $tags = array('Bell', 'Romance', 'Sport', 'Nature', 'Love', 'War', 'Spiritual', 'Horror');
        $key  = array_rand($tags);

        $qualifications = array('B-TECH', 'B-SC', 'B-AED', 'PHD', 'MSC', 'M-A', 'PROF', 'SECONDARY', 'PRIMARY', 'NONE');
        $qual_key       = array_rand($qualifications);

        return [
            'user_id'          => User::inRandomOrder()->first()->id,
            'first_name'       => $this->faker->firstName,
            'middle_name'      => $this->faker->lastName,
            'last_name'        => $this->faker->lastName,
            'age'              => $this->faker->numberBetween(15, 100),
            'phone'            => $this->faker->phoneNumber,
            'gender'           => rand(0, 1) ? 'Male' : 'Female',
            'address'          => $this->faker->address,
            'city'             => $countries == 'Nigeria' ? $nigeria_states[$nig_key] : $cameroon_states[$cam_key],
            'country'          => $countries[$country_key],
            'zipcode'          => $this->faker->numberBetween(12345, 999999),
            'language'         => rand(0, 1) ? 'French' : 'English',
            'biography'        => $this->faker->paragraphs(3, true),
            'Interest'         => $tags[$key],
            'qualification'    => $qualifications[$qual_key],
        ];
    }
}
