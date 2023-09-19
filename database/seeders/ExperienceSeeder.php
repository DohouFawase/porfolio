<?php

namespace Database\Seeders;

use App\Models\admin\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Experience::factory()->count(6)->create();

    }
}
