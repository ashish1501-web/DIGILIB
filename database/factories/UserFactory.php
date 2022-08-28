<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // '2', 'Ashish', 'ashishcharakuni@gmail.com', '9353156916', '', '1', 'active', NULL, NULL, '2022-08-14 05:10:45', '2022-08-14 05:10:45'

    public function definition()
    {
        return [
            'userName' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phoneNumber'=>fake()->phoneNumber(),

            'email_verified_at' => now(),
            'password' => '$2y$10$q.gihd44QaY95XrkJD4gIOamoZ8PF31fM935h8upVIjS4M8wPCgTm', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
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
