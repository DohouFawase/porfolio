<?php

namespace Database\Factories\admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin\Bio>
 */
class BioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name(),
            'second_name' =>fake()->lastName(),
            'description' => fake()->sentences(12, true),
            'image' => fake()->imageUrl()
        ];
    }
}
