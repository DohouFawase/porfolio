<?php

namespace Database\Seeders;

use App\Models\admin\Bio;
use Database\Factories\admin\BioFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Bio::factory()->count(1)->create();
    }
}
