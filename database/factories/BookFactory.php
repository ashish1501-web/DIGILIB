<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'book_name'=>fake()->name(),
        'author_name'=>fake()->name(),
        'publisher'=>fake()->text(10),
        'description'=>fake()->text(50),
        
        'pages'=>rand(200,1000),
        'category'=>rand(1,3),
        // 'book_file',
        
        ];
    }
}
