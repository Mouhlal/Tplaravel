<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reference' => fake()->word(),
            'des' => fake()->word(),
            'prix' => fake()->numberBetween(1,1222),
            'stock' => fake()->numberBetween(1,100000)
        ];
    }
}
