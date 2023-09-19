<?php

namespace Database\Seeders;

use App\Models\admin\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Project::factory()->count(12)->create();

    }
}
