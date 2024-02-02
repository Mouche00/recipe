<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Recipe::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'excerpt' => implode('</p><p>', $this->faker->paragraphs(2)),
            'body' => implode('</p><p>', $this->faker->paragraphs(6)),
        ];
    }
}
