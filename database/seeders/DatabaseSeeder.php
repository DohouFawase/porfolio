<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\admin\CompetenceFactory;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       $this->call(BioTableSeeder::class);
       $this->call(CompetenceSeeder::class);
       $this->call(ExperienceSeeder::class);
       $this->call(ProjectSeeder::class);
       $this->call(CategorieSeeder::class);
    }
}
