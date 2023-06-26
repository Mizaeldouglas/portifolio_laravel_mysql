<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Project::create([
                'name' => $faker->name,
                'description' => $faker->paragraph,
                'project_name' => $faker->company,
                'technology_name' => $faker->word,
                'date' => $faker->date,
                'technology_image' => $faker->imageUrl(200, 200, 'technologies', true),
            ]);
        }
    }

}
