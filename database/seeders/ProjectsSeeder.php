<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 9; $i++) {

            Project::query()->create([
                'image_url' => 'https://plus.unsplash.com/premium_photo-1673306778968-5aab577a7365?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YmFja2dyb3VuZCUyMGltYWdlfGVufDB8fDB8fHww',
                'name' => $faker->sentence($nbWords = 2, $variableNbWords = true),
                'subtitle' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'description' => $faker->paragraph($nbSentences = 4, $variableNbSentences = true)
            ]);

        }
    }
}
