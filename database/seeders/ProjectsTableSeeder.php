<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i=0; $i < 10; $i++) {

            $new_item = new Project();

            $new_item->name = $faker->company();
            $new_item->slug = Project::generateSlug($new_item->name);
            $new_item->client_name = $faker->name();
            $new_item->summary = $faker->realText(200);
            $new_item->cover_image = 'https://www.pngitem.com/pimgs/m/579-5798581_image-placeholder-circle-hd-png-download.png';
            // dump($new_item);
            $new_item->save();
        }
    }
}
