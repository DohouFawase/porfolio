<?php

namespace Database\Factories\admin;

use App\Models\admin\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin\Project>
 */
class ProjectFactory extends Factory
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
            "name"=>$this->faker->word(),
            "tech"=>$this->faker->word(),
            "description"=>$this->faker->paragraph(),
            "project_link"=>$this->faker->url(),
            "category_id"=>function (){
                return Categorie::factory()->create()->id;
            },
        ];
    }
}
