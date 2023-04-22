<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [];
        $faker = Factory::create();
        $i = [];

        for ($i= 1; $i <=5; $i++){
            $posts [] = [

                'title'     => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'excerpt'   => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'content'   => $faker->text,
                'image'     => $faker->imageUrl($width = 340, $height = 220),
                'author_id' => $faker->numberBetween(1,5)
            ];
        }

        DB::table("posts")->insert($posts);
    }
}