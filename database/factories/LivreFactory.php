<?php

namespace Database\Factories;

use App\Models\Livre;
use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livre>
 */
class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'name'=>fake()->name(),
        'texte'=> fake()->sentence(),
        'note'=>fake()->numberBetween(1,5)
        ];
    }
}
