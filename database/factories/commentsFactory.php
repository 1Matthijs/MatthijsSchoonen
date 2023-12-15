<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class commentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'post_id' => fake()->numberBetween(1,10),	
                'user_id' => fake()->numberBetween(1, 10),
                'content' => fake()->text(),
            
        ];
    }
}
