<?php

namespace Database\Factories\Users;


use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'               => $this->faker->name,
            'email'              => $this->faker->unique()->safeEmail,
            'email_verified_at'  => now(),
            'password'           => bcrypt('password'), // password
            'remember_token'     => Str::random(10),
            'verified'           => $verified = rand(User::VERIFIED_USER,  User::UNVERIFIED_USER),
            'verification_token' => $verified == User::VERIFIED_USER ? null : User::generateVerificationCode(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
