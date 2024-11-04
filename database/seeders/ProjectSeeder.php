<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();

        for ($i=0; $i < 3 ; $i++) { 
            $title = fake()->sentence();

            Project::create([
                'title' => $title,
                'description' => fake()->paragraph(),
                'deadline'=> fake()->date()
            ]);
        }


    }
}
