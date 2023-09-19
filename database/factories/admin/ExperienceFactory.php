<?php

namespace Database\Factories\admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin\Experience>
 */
class ExperienceFactory extends Factory
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
            "name"=> $this->faker->sentence(1, true),
            "description"=> $this->faker->paragraph(),
            "years"=> $this->faker->dateTimeThisYear(),
            "post"=> $this->faker->word(),
            "company_name"=> $this->faker->sentence(1)

        ];
    }
}
